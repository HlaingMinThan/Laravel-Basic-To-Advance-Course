<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        //validation
        $formData=request()->validate([
            'name'=>['required','max:255','min:3'],
            'email'=>['required','email',Rule::unique('users', 'email')],
            'username'=>['required','max:255','min:3',Rule::unique('users', 'username')],
            'password'=>['required','min:8']
        ]);
        $user=User::create($formData);
        
        return redirect('/')->with('success', 'Welcome Dear, '.$user->name);
    }
}
