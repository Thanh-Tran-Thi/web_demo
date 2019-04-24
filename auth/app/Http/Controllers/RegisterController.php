<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller {
    
    public function index() {
        return view('register');
    }

    public function register(RegisterRequest $request) {
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);
    }
}