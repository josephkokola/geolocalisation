<?php

namespace App\Http\Controllers;

use App\Mail\Resetotp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function page_email(){
        return view('page_email');
    }
    public function forget_email(){
        return view('forget_email');
    }
    public function forgot_password_change_process(){
        return view('forgot_password_change_process');
    }
}
