<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberStore;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(MemberStore $request)
    {
        $validated = $request->validated();
        $credentials = $request->only('email', 'password');
        try {
            $token = Auth::attempt($credentials);
        }catch (JWTException $e){

        }
        $user = Member::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function register()
    {
        
    }
}
