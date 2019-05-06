<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected  $primaryKey = "id_user";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'permisos',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public static $loginRules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    public static $errorMessages = [
        'email.required' => 'Debe ingresar un email.',
        'password.required' => 'Debe ingresar un password.',
        'password.min' => 'El password debe tener al menos :min caracteres.',

    ];

}
