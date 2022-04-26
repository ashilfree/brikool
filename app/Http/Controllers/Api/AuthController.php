<?php

namespace App\Http\Controllers\Api;

use App\Events\MemberCreated;
use App\Events\PasswordRecovery;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberLoginStore;
use App\Http\Requests\MemberRecoverStore;
use App\Http\Requests\MemberRegisterStore;
use App\Mail\MemberVerification;
use App\Mail\MemberVerificationMarkdown;
use App\Models\LoginLog;
use App\Models\Member;
use http\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use JWTAuth;

class AuthController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'verifyMember', 'recover']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param MemberLoginStore $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(MemberLoginStore $request)
    {
        $credentials = $request->validated();

        if (! $token = auth('api')->attempt($credentials,true)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $member = auth('api')->user();
        $login_log = new LoginLog();
        $login_log->type = "login";
        $login_log->member_id = $member->id;
        $login_log->save();
        return $this->respondWithToken($token);
    }

    /**
     * Register and Get a JWT via given credentials.
     *
     * @param MemberRegisterStore $request
     * @return \Illuminate\Http\JsonResponse
     */
        public function register(MemberRegisterStore $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $member = Member::create($validated);
        $verification_code = Str::random(30);
        DB::table('member_verifications')->insert(['member_id'=>$member->id,'token'=>$verification_code]);

        event(new MemberCreated($member, $verification_code));

        $token = JWTAuth::fromUser($member);

        return $this->respondWithTokenAndMember($member, $token);
    }

    /**
     * API Verify User
     *
     * @param $verification_code
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyMember($verification_code): \Illuminate\Http\JsonResponse
    {
        $check = DB::table('member_verifications')->where('token',$verification_code)->first();

        if(!is_null($check)){
            $member = Member::find($check->member_id);

            if($member->is_verified == 1){
                return response()->json([
                    'success'=> true,
                    'message'=> 'Account already verified..'
                ]);
            }

            $member->update(['is_verified' => 1]);
            DB::table('member_verifications')->where('token',$verification_code)->delete();

            return response()->json([
                'success'=> true,
                'message'=> 'You have successfully verified your email address.'
            ]);
        }

        return response()->json(['success'=> false, 'error'=> "Verification code is invalid."]);

    }

    /**
     * API Recover Password
     *
     * @param MemberRecoverStore $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function recover(MemberRecoverStore $request)
    {
        $credentials = $request->validated();
        $member = Member::where('email', $credentials['email'])->first();
        if (!$member) {
            $error_message = "Your email address was not found.";
            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }

        DB::table(config('auth.passwords.members.table'))->where('email', $member->email)->delete();
        $token = Str::random(64);
        DB::table(config('auth.passwords.members.table'))->insert([
            'email' => $member->email,
            'token' => $token,
            'created_at' => \Carbon\Carbon::now(),
        ]);

        event(new PasswordRecovery($member, $token));
        return response()->json([
            'success' => true, 'data'=> ['message'=> 'A reset email has been sent! Please check your email.']
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $member = auth('api')->user();

        $logout_log = new LoginLog();
        $logout_log->type = "logout";
        $logout_log->member_id = $member->id;
        $logout_log->save();
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the token array structure.
     *
     * @param $member
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithTokenAndMember($member, string $token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'member' => $member,
        ]);
    }
}
