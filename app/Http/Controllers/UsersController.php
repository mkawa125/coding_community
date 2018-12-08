<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function profile(){
        $_SESSION['id']= $_GET['id'];
        $selected_user = DB::table('users')->get();
        return view('accounts/user_profile')->with('users', $selected_user);
    }
}
