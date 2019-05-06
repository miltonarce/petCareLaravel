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
            'id_categoria' => 1,
            'nombre' => 'Laina',
            'imagen' => 'laina.jpg',
            'nacimiento' => '2015-11-23',
            'descripcion'=> 'Este perro de raza beagle fue encontrado en la zona de quilmes, en la calle alvear 525.',
            'vacunas' => true,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 2,
            'id_raza' => 2,
            'id_categoria' => 1,
            'nombre' => 'Goku',
            'imagen' => 'goku.jpg',
            'nacimiento' => '2012-01-23',
            'descripcion'=> 'Este perro de al parecer de raza dobermann fue encontrado en la playa de san bernardo, en a las 18 hs del dia domingo, portaba una especie de traje.',
            'vacunas' => true,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 3,
            'id_raza' => 4,
            'id_categoria' => 1,
            'nombre' => 'Bella',
            'imagen' => 'bella.jpg',
            'nacimiento' => '2017-01-03',
            'descripcion'=> 'Este cachorrito de raza labrador estaba con la patita quebrada en la esquina de corrientes y 9 de julio.',
            'vacunas' => false,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 4,
            'id_raza' => 7,
            'id_categoria' => 1,
            'nombre' => 'Ciro',
            'imagen' => 'ciro.jpg',
            'nacimiento' => '2016-01-03',
            'descripcion'=> 'Este perro fue encontrado en la zona de quilmes se encontraba desorientado y muy hambriento.',
            'vacunas' => false,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 5,
            'id_raza' => 8,
            'id_categoria' => 2,
            'nombre' => 'Ragnar',
            'imagen' => 'ragnar.jpg',
            'nacimiento' => '2014-10-18',
            'descripcion'=> 'Este gato de raza perza fue encontrado junto a su madre en zona sur, la madre tiene familia pero no puede adoptar dos gatos, se encuentra mal de un ojo.',
            'vacunas' => false,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 6,
            'id_raza' => 12,
            'id_categoria' => 2,
            'nombre' => 'Nimo',
            'imagen' => 'nimo.jpg',
            'nacimiento' => '2014-10-18',
            'descripcion'=> 'Este gato estaba en la puerta de mi casa en ezeiza a las 9 de la mañana del día domingo 5 de mayo.',
            'vacunas' => true,
            'adoptado' => true,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('mascotas')->insert([
            'id_mascota' => 7,
            'id_raza' => 14,
            'id_categoria' => 2,
            'nombre' => 'Vegeta',
            'imagen' => 'vegeta.jpg',
            'nacimiento' => '2018-10-07',
            'descripcion'=> 'Se encontro gato, al parecer de raza persa portaba una chapita que decia Vegeta, sin número. Se encontraba dentro de una esfera gigante.',
            'vacunas' => false,
            'adoptado' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
