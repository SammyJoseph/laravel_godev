<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'El usuario se creó con éxito',
            'token'     => $user->createToken("API TOKEN")->plainTextToken,
        ], 200);
    }

    public function loginUser(LoginRequest $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))) // attemp intenta logear al usuario
        {
            return response()->json([
                'status'    => false,
                'message'   => 'Email & Password incorrectos',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status'    => true,
            'message'   => 'El usuario inició sesión con éxito',
            'token'     => $user->createToken("API TOKEN")->plainTextToken,
        ], 200);
    }
}
