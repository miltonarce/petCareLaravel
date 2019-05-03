<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_user' => 1,
            'email' => 'milton@email.com',
            'password' => Hash::make('123456'),
            'nombre' => 'Milton',
            'apellido' => 'Arce',
            'dni' => '36763942',
            'permisos'=> 1,
            'nacimiento' => '1992-05-12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 2,
            'email' => 'santiago@email.com',
            'password' => Hash::make('123456'),
            'nombre' => 'Santiago',
            'apellido' => 'Gallino',
            'dni' => '36123321',
            'nacimiento' => '1992-05-12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
