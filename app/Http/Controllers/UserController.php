<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function index()
    {
        $user = Auth::User();
        return view('users.index',['user'=>$user]);
    }

    function profile()
    {
        return view('users.profile');
    }
    function settings()
    {
        return view('users.settings');
    }
}