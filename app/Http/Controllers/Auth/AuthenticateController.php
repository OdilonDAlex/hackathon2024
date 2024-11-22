<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticateController extends Controller
{
    
    public function login(){
        return view('guest.login');
    }

    public function authenticate(AuthenticateFormRequest $request){

        $credentials = $request->validated();
        

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        throw ValidationException::withMessages([
            'email' => 'Email ou mot de passe incorrect'
        ]);

    }

    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
