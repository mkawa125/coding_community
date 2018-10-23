<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //login function
    public function userLogin(){
        //validate user inputs
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);

        }

        return redirect()->to('/');
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('/home');
    }
}
