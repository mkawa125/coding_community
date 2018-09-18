<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
    public function home(){
        return view('pages/home');
    }
    public function developers(){
        return view('pages/home');
    }
    public function about(){
        return view('pages/about');
    }
    public function categories(){
        return view('pages/home');
    }
    public function jobs(){
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
        DB::table('users')->insert($data);
        return RegisterController::addSkills();
    }
    public function addSkills(Request $request){
        $data = array(
            'skills' => $request->input('skills'),
            'user_phone' => $request->input('phone'),
        );
        $data_two = array(

        );
        DB::update('update users set skills = $skills where id = ', []);
    }
}
