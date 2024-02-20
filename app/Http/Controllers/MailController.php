<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('clase-15.index');
    }

    public function mailMe()
    {
        $to = 'ewsitewp@gmail.com';
        Mail::to($to)->send(new ExampleMail('Sam'));
        
        return redirect()->route('clase-15.index')->with('mail_success', 'El mensaje fue enviado con éxito a');
    }
}
