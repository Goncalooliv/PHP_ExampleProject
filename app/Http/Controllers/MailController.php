<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    /*public function sendEmail(){

        Mail::to('something@mail.com')->send(new TestMail());

        return view('welcome');
    }*/
}
