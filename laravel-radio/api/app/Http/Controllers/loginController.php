<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Routing\Redirector;


class loginController extends Controller
{
    public function logout(Redirector $redirect)
    {
        Auth::logout();
        return $redirect->to('/');
    }
    public function login()
    {
        return view('login.login');
    }
    public function autenticar(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        $usuario = $request->name;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('app', compact('usuario'));
        } else {
            return view('login.login');
        }
    }
}
