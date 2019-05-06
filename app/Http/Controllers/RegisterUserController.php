<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function doRegister(Request $request)
    {
        $request->validate(User::$rules, User::$errorMessages);

        $data = $request->all();

        $data['email'] = $request->input('newEmail');
        $data['password'] = Hash::make($request->input('newPassword'));
        
        User::create($data);

        return redirect(url('/'));
    }

}
