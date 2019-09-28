<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
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
    public function create()
    {
        return view('/pages/register');
    }
}
