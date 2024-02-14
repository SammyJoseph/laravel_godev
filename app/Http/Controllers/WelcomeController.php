<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $message = __('welcome.example');
        $greeting = __('welcome.greeting', ['name' => 'Sam']);

        return view('clase-14.welcome', compact('message', 'greeting'));
    }
}
