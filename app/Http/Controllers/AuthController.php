<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $title = 'Login';
        return view('auth/login', compact('title'));
    }
}
