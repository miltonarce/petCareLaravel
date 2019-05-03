<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('razas')->insert([
            'id_raza' => 1,
            'id_categoria' => 1,
            'nombre' => 'Beagle',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 2,
            'id_categoria' => 1,
            'nombre' => 'Dobermann',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 3,
            'id_categoria' => 1,
            'nombre' => 'Husky Siberiano',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 4,
            'id_categoria' => 1,
            'nombre' => 'Labrador Retriever',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 5,
            'id_categoria' => 1,
            'nombre' => 'Golden Retriever',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 6,
            'id_categoria' => 1,
            'nombre' => 'Rottweiler',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 7,
            'id_categoria' => 1,
            'nombre' => 'Boxer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 8,
            'id_categoria' => 2,
            'nombre' => 'Persa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 9,
            'id_categoria' => 2,
            'nombre' => 'Sphynx',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 10,
            'id_categoria' => 2,
            'nombre' => 'Siamés',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 11,
            'id_categoria' => 2,
            'nombre' => 'Scottish Fold',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 12,
            'id_categoria' => 2,
            'nombre' => 'Maine Coon',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 13,
            'id_categoria' => 2,
            'nombre' => 'Himalayo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('razas')->insert([
            'id_raza' => 14,
            'id_categoria' => 2,
            'nombre' => 'Siberiano',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
