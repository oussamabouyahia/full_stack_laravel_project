<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class authController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');

    }
    public function register(Request $req){
        $validated=$req->validate(
         ['name'=>"required|string|min:3|max:55",
           'email'=>"required|email|unique:users",
           'password'=>"required|string|min:8|confirmed",
         ]
        );
        if(!$validated){return redirect()->route("show.register");}
        $user=User::create($validated);
        Auth::login($user);
        return redirect()->route("ninjas.index");
    }
    public function login(Request $req){
        $validated=$req->validate(
            [
              'email'=>"required|email",
              'password'=>"required|string",
            ]
           );
           if(Auth::attempt($validated)){
            $req->session()->regenerate();
            return redirect()->route('ninjas.index');
           }
           throw ValidationException::withMessages([
            "credentials"=>"incorrect credentials"
           ]);
    }
    public function logout(Request $req){
      Auth::logout();
      $req->session()->invalidate();
      $req->session()->regenerateToken();
      return redirect()->route('login');

    }
}
