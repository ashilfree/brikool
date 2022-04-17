<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Resources\MemberResource;

class MemberController extends Controller
{

    public function index()
    {
        return MemberResource::collection(Member::with('profile')->get());
//        return new MemberResource(Member::find(1));
//        return Member::with('profile')->get();
    }
}
