<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberLoginStore;
use App\Http\Requests\MemberRegisterStore;
use App\Mail\MemberVerification;
use App\Models\LoginLog;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param MemberLoginStore $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(MemberLoginStore $request)
    {
        $credentials = request(['email', 'password']);

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
//        dd($member->email);
        Mail::to($member)->send(
            new MemberVerification($member)
        );

        $token = JWTAuth::fromUser($member);

        return $this->respondWithToken($token);
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
}
