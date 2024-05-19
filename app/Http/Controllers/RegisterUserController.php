<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);

        $employerAttributes = $request->validate([
            'employer_name' => 'required',
            'employer_logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->employer_logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer_name'],
            'logo' => $logoPath,
        ]);

        $request->session()->regenerate();
        Auth::login($user);

        return redirect('/');
    }
}
