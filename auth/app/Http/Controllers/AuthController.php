<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $attemptToLogin = Auth::attempt(['email' => $email, 'password' => $password]);
        if ($attemptToLogin) {
            return 'Success';
        }
        return 'Failure';
    }
}
