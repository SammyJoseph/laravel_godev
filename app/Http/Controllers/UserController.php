<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // $users = User::where('age', '30')->get();
        // $users = User::where('age', '>=', '30')->get();
        // $users = User::where('age', '<=', '30')->where('zip_code', '112233')->get();
        // $users = User::where('age', '>=', '30')->orWhere('zip_code', '112233')->get();
        // $users = User::where('age', '>=', '30')->orWhere('zip_code', '112233')->orderBy('age', 'asc')->get();
        // $users = User::where('age', '>=', '30')->orWhere('zip_code', '112233')->orderBy('age', 'asc')->first();
        // $users = User::find(2);
        // $users = User::findOrFail(22);

        // $users = DB::select( DB::raw("SELECT * from users WHERE age=30") );
        // $users = DB::select("SELECT * FROM users WHERE age = 30");
        $users = DB::table('users')->select(DB::raw('*'))->where('age', '=', 32)->get();

        
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

    public function oneToOne()
    {
        $users = User::all();

        return view('clase-8.onetoone', compact('users'));
    }
}
