<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "id_user";

    protected $fillable = ["email", "password", "nombre", "apellido", "imagen", "dni", "permisos", "nacimiento"];

    public static $rules = [
        'email' => 'required',
        'password' => 'required|min:6',
        'nombre' => 'required|min:3',
        'apellido' => 'required|min:3',
        'dni' => 'required|integer|min:7',
        'nacimiento' => 'required'
    ];

    public static $errorMessages = [
        'email.required' => 'Debe ingresar un email.',
        'password.required' => 'Debe ingresar un password.',
        'password.min' => 'El password debe tener al menos :min caracteres.',
        'name.required' => 'Debe ingresar un nombre.',
        'name.min' => 'El nombre debe tener al menos :min caracteres',
        'apellido.required' => 'Debe ingresar un apellido.',
        'apellido.min' => 'El apellido debe tener al menos :min caracteres.',
        'dni.required' => 'Debe ingresar un Dni.',
        'dni.integer' => 'El dni solo puede ser un número entero.',
        'dni.min' => 'El dni debe tener al menos :min caracteres.',
        'nacimiento.required' => 'Debe ingresar una fecha de nacimiento.',
    ];
}
