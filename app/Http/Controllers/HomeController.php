<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Models\Categoria;
use App\Models\Mascota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {

       $mascotas = Mascota::with(['raza', 'categoria'])->get();
       return view('index', compact('mascotas'));
   }

   public function detalle($id)
   {
       $mascota = Mascota::find($id);
       return view('detalle', compact('mascota'));
   }
}
