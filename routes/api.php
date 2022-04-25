<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->name('api.v1.')->namespace('Api\V1')->group(function (){
    Route::get('/status', function () {
        return response()->json(['status' => 'OK']);
    })->name('status');
    Route::apiResource('members', 'MemberController');
});

Route::prefix('v2')->name('api.v2.')->group(function (){
    Route::get('/status', function () {
        return response()->json(['status' => true]);
    })->name('status');
});

Route::post('/members/login', 'Api\\AuthController@login');
Route::post('/members/register', 'Api\\AuthController@register');
Route::post('/members/recover', 'Api\\AuthController@recover');
Route::group(['middleware' => ['cors_me']], function (){
    Route::group(['middleware' => 'jwtCheck'], function ($router){
        Route::post('logout', 'Api\\AuthController@logout');
        Route::post('refresh', 'Api\\AuthController@refresh');
        Route::post('me', 'Api\\AuthController@me');
    });
});
Route::get('mailable', function (){
    $member = \App\Models\Member::all()->first();
    return new \App\Mail\MemberVerification($member, "dggg");
//    return new \App\Mail\MemberVerificationMarkdown($member);
});

Route::fallback(function (){
    return response()->json([
        'message' => 'Not found'
    ], 404);
})->name('api.fallback');


