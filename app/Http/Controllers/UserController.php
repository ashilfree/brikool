<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dump(is_array(User::all()));
        dump(get_class(User::all()));
        die;
        return User::all();
    }
}
