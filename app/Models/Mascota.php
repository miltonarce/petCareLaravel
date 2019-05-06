<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = "mascotas";
    protected $primaryKey = "id_mascota";

    protected $fillable = ["id_raza", "id_categoria", "nombre", "imagen", "nacimiento", "descripcion", "vacunas", "adoptado"];

    public static $rules = [
        'id_raza' => 'required|integer|exists:razas',
        'id_categoria' => 'required|integer|exists:categorias',
        'nombre' => 'required|min:3',
        "descripcion" => 'required'
    ];

    public static $errorMessages = [
        'id_raza.required' => 'Debe seleccionar una raza.',
        'id_raza.integer' => 'La raza debe ser un id.',
        'id_raza.exists' => 'La raza seleccionada no existe.',
        'id_categoria.required' => 'Debe seleccionar una categoria.',
        'id_categoria.integer' => 'La categoria debe ser un id.',
        'id_categoria.exists' => 'La categoria seleccionada no existe.',
        'nombre.required' => 'Debe ingresar un nombre.',
        'nombre.min' => 'El nombre debe tener al menos :min caracteres',
        'descripcion.required' => 'Debe escribir una descripcion de la mascota.',
    ];

    public function raza()
    {
        return $this->belongsTo(Raza::class, 'id_raza', 'id_raza');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
