<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdRazaToMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->unsignedInteger('id_raza')->after('id_mascota');
            $table->foreign('id_raza')->references('id_raza')->on('razas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->dropForeign(['id_raza']);
            $table->dropColumn('id_raza');
        });
    }
}
