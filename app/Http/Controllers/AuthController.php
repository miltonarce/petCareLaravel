<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends  Controller
{
    public function formLogin()
    {

            return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate(User::$loginRules, User::$errorMessages);

        $userData = [
            'email'    => $request->get('email'),
            'password' => $request->get('password')
        ];

        if(!Auth::attempt($userData)){
            return redirect(url('/'))
                ->withInput($request->all())
                ->with('message', 'El usuario y/o contraseña  son incorrectos. Vuelva a intentar.');
        }

        return redirect(url('/home'));

    }

    public function doLogout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}