<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'username' => 'required|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    public function create()
    {
       return view('/pages/register');
    }
    public function home()
    {
        return view('pages/home');
    }

    public function store(Request $request){

        //validating user inputs
        $this->validate(request(), [
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
            're_password' => 'required|same:password'
        ]);

        $data = array(
            'name' => $request->input('first_name'),
            'username' => $request->input('username'),
            'surname' => $request->input('surname'),
            'location' => $request->input('location'),
            'email' => $request->input('email'),
            'status' => 0,
            'password' => bcrypt($request->input('password')),
            'created_at' => date('Y-m-d H:i:s'),
        );
        $last_user = DB::table('users')->insertGetId($data);
        $request->session()->put('last_user', $last_user);
        $request->session()->put('username', $request->input('username'));
        $request->session()->put('surname', $request->input('surname'));
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('gender', $request->input('gender'));
        return RegisterController::createSkills();
    }
    public function createSkills(){
        return view('pages/register_two');
    }
    public function addSkills(Request $request){

        //validating user inputs
        $this->validate(Request(),[
            'skills' => 'required',
            'user_status' => 'required',
            'phone_number' => 'required',
            'gender' => 'required'
        ]);
        //getting post user inputs
        $data = array(
            'skills' => implode(',', $request->get('skills')),
            'user_phone' => $request->input('phone_number'),
            'work' => $request->input('user_status'),
            'status' => 1,
            'gender' => $request->input('gender'),
        );
        DB::table('users')->WHERE('id', $request->session()->get('last_user'))->update($data);
        Auth::loginUsingId($request->session()->get('last_user'));
        return redirect()->route('home');
    }
    public function userLogin(){
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);

        }
        return redirect()->to('/register');
    }

    public function ShowRegistrationForm(){
        return RegisterController::create();
    }
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('home');
    }
}

