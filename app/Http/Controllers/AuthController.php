<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore()
    {
        $cleanData = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' =>  ['min:4', 'required']
        ], [
            'email.exists' => 'User does not exists'
        ]);
        if (auth()->attempt($cleanData)) {
            return redirect('/')->with('success', 'Welcome Back ' . auth()->user()->name);
        } else {
            return back()->withErrors([
                'email' => 'Your Credentials is something wrong'
            ]);
        }
    }

    public function store()
    {
        $cleanData = request()->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')],
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => ['required', 'min:6', 'max:16', 'confirmed']
        ]);
        $user = User::create($cleanData);
        auth()->login($user);
        return redirect('/')->with('success', 'Welcome to creativecoder ' . $user->name);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye');
    }
}
