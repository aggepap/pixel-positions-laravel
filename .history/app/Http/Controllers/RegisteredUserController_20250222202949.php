<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $userAttributes =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required|string|confirmed', Password::min(6)],
        ]);

        $employerAttributes =  $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required',
            File::types('png|jpg|jpeg|webp')->max(1024),

        ]);
        $user = User::create($userAttributes);
        Employer::create($employerAttributes);
    }
}
