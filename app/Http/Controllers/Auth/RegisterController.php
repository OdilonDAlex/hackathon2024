<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    

    public function register() {
        return view('guest.register');
    }

    public function store(RegisterFormRequest $request){
        $credentials = $request->validated();


        if($credentials['password'] != $credentials['confirm_password']){
            throw ValidationException::withMessages([
                'password' => 'Le mot de passe et la confirmation mot de passe doivent-être la même.'
            ]);
        }

        $user = User::create([
            'name' => $credentials['name'],
            'firstname' => $credentials['firstname'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password'])
        ]);

        Auth::login($user);
        
        $request->session()->regenerate();

        return redirect()->route('home');
    }
}
