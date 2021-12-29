<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function home(){
        return view("home");
    }

    public function developteam(){
        return view("developteam");
    }
}