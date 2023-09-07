<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Login');
    }

    public function register()
    {
        return Inertia::render('UserRegistration');
    }

    public function forgot() 
    {
        return Inertia::render('ForgotPassword');
    }

    public function emailConfirm() {
        return Inertia::render('EmailConfirm');
    }

    public function phoneConfirm() {
        return Inertia::render('PhoneConfirm');
    }
}
