<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mascotas')->insert([
            'id_mascota' => 1,
            'id_raza' => 1,
            'nombre' => 'Laina',
            'nacimiento' => '2015-11-23',
            'vacunas' => true,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 2,
            'id_raza' => 2,
            'nombre' => 'Goku',
            'nacimiento' => '2012-01-23',
            'vacunas' => true,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 3,
            'id_raza' => 4,
            'nombre' => 'Bella',
            'nacimiento' => '2017-01-03',
            'vacunas' => false,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 4,
            'id_raza' => 7,
            'nombre' => 'Ciro',
            'nacimiento' => '2016-01-03',
            'vacunas' => false,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 5,
            'id_raza' => 8,
            'nombre' => 'Ragnar',
            'nacimiento' => '2014-10-18',
            'vacunas' => false,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 6,
            'id_raza' => 12,
            'nombre' => 'Nimo',
            'nacimiento' => '2014-10-18',
            'vacunas' => true,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 7,
            'id_raza' => 14,
            'nombre' => 'Vegeta',
            'nacimiento' => '2018-10-07',
            'vacunas' => false,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
