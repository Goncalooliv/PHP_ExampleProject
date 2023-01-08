<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function homepage(){
        return view("welcome");
    }

    public function developteam(){
        return view("developteam");
    }

    public function loginConfirmation(){
        return view("home");
    }

    public function loginAdmConfirmation(){
        return view('adminHome');
    }
}
