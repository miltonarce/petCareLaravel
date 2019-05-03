<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function doRegister(Request $request)
    {
        $request->validate(User::$rules, User::$errorMessages);

        $data = $request->all();

        User::create($data);

        return redirect(url('/'));
    }

}
