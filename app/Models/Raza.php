<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    protected $table = "razas";
    protected $primaryKey = "id_raza";

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'id_raza', 'id_raza');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
