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
    public function login(MemberLoginStore $request)
    {
        $validated = $request->validated();

        if (!Auth::attempt($validated, false)){
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = Member::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function register(MemberRegisterStore $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $member = Member::create($validated);

        $token = $member->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $member,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
