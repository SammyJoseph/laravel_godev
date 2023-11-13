<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        // return view('clase-4.index', ['users' => $users]);
        return view('clase-4.index', compact('users')); // same as ↑
    }

    public function create()
    {
        $user = new User;
        $user->name =       'Usuario 1';
        $user->email =      'usuario1@example.com';
        $user->password =   Hash::make('password');
        $user->age =        '32';
        $user->address =    'Avenida 123';
        $user->zip_code =   '112233';
        $user->save();

        User::create([
            'name'      => 'Usuario 2',
            'email'     => 'usuario2@example.com',
            'password'  => Hash::make('password'),
            'age'       => '32',
            'address'   => 'Avenida 123',
            'zip_code'  => '112233'
        ]);

        return redirect()->route('user.index');
    }
}
