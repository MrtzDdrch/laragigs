<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create(){
        return view('users.create');
    }

    // Store New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('users', 'name')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required, confirmed', 'min:8'],
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login new user
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
}
