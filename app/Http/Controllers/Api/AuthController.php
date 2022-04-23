<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberLoginStore;
use App\Http\Requests\MemberRegisterStore;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//    public function login(MemberLoginStore $request)
//    {
//        $validated = $request->validated();
//
//        if (!Auth::attempt($validated, false)){
//            return response()->json(['message' => 'Unauthorized'], 401);
//        }
//
//        $user = Member::where('email', $request['email'])->firstOrFail();
//        $token = auth('api')->attempt($validated, false);
////        $token = $user->createToken('auth_token')->plainTextToken;
//        return $this->respondWithToken($token);
//        return response()
//            ->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
//    }
//
//    public function register(MemberRegisterStore $request)
//    {
//        $validated = $request->validated();
//        $validated['password'] = Hash::make($validated['password']);
//        $member = Member::create($validated);
//
//        $token = $member->createToken('auth_token')->plainTextToken;
//
//        return response()
//            ->json(['data' => $member,'access_token' => $token, 'token_type' => 'Bearer', ]);
//    }
//
//    public function logout()
//    {
//        auth()->user()->tokens()->delete();
//
//        return [
//            'message' => 'You have successfully logged out and the token was successfully deleted'
//        ];
//    }
//
//    /**
//     * Get the token array structure.
//     *
//     * @param  string $token
//     *
//     * @return \Illuminate\Http\JsonResponse
//     */
//    protected function respondWithToken($token)
//    {
//        return response()->json([
//            'access_token' => $token,
//            'token_type' => 'bearer',
//            'expires_in' => auth('api')->factory()->getTTL() * 60
//        ]);
//    }


    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials,true)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
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
