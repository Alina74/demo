<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidation;
use App\Http\Requests\RegisterValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function loginPost(LoginValidation $loginValidation)
    {
        if (Auth::attempt($loginValidation->validated())){
            $loginValidation->session()->regenerate();
            return back()->with(['success'=>true]);
        }
        return back()->withErrors(['auth'=>'Логин или пароль не верный']);
    }

    public function register()
    {
        return view('users.register');
    }

    public function registerPost(RegisterValidation $registerValidation)
    {
        $validation=$registerValidation->validated();
        $validation['password']=Hash::make($validation['password']);
        User::create($validation);
        return redirect()->route('login')->with(['register'=>true]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('about');
    }
}
