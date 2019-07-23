<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function showUser()
    {

        $users = User::all();

        return view('users', [
            'users' => $users
        ]);
    }
}
