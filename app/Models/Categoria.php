<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $primaryKey = "id_categoria";

    public function mascotas()
    {
        return $this->hasMany(Raza::class, 'id_categoria', 'id_categoria');
    }
}
