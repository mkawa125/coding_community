<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $userDetails = $user->user;
            $userDetails = (object) $userDetails;
//            dd($userDetails);

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                 return redirect('/home');

            }else{
                $newUser = User::create([
                    'name' => $userDetails->name,
                    'email' => $userDetails->email,
                    'google_id'=> $userDetails->id,
                    'first_name' => $userDetails->given_name,
                    'surname' => $userDetails->family_name,
                    'username' => $userDetails->family_name,
                    'avatar_url' => $userDetails->picture,
                    'location' => null,
                    'phone_number' => null,
                    'gender' => null,
                    'verified_email' => true,
                    'password' => $userDetails->family_name, // secret
                ]);
                Auth::login($newUser);

                return redirect()->back();
            }

        } catch (Exception $e) {
            dd($e);
        }
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('home');
    }

}
