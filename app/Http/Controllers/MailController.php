<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('clase-15.index');
    }

    public function mailMe()
    {
        return view('emails.example');
    }
}