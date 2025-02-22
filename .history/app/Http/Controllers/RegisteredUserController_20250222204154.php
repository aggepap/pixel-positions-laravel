<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'password' => ['required', 'string', 'confirmed', Password::min(6)],
        ]);

        $employerAttributes =  $request->validate([
            'employer' => 'required|string|max:255',
            'logo' => [
                'required',
                File::types('png|jpg|jpeg|webp')->max(1024)
            ],

        ]);
        $user = User::create($userAttributes);
        $logoPath = $request->file('logo')->store('logos', 'public');
        $user->employer()->create(
            [
                'name' => $employerAttributes['employer'],
                'logo' => $logoPath,
            ]
        );
        Auth::login($user);
        return redirect('/');
    }
}
