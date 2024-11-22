<?php

namespace App\Http\Controllers;

use illuminate\request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
}