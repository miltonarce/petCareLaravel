<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Models\Mascota;
use App\Models\Categoria;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function mascotasListado()
    {
        $mascotas = Mascota::with(['raza'])->get();
        return view('admin.listado_mascotas', compact('mascotas'));
    }

    public function cargarMascotaForm()
    {
        $razas= Raza::all();
        $categorias= Categoria::all();
        return view('admin.nuevo_mascotas', compact('razas', 'categorias'));
    }

    public function cargarMascota(Request $request)
    {
        $request->validate(Mascota:: $rules, Mascota::$errorMessages);

        $dataMascota = $request->all();

        if($request->hasFile('imagen')){
            $img = $request->imagen;
            $nombreImg = time() . "." . $img->extension();

            $img->move(public_path('/imagenes/petsImgs'), $nombreImg);
            $dataMascota['imagen'] = $nombreImg;
        }else{
            $dataMascota['imagen'] = null;
        }

        Mascota::create($dataMascota);

        return redirect(url('/admin/mascotas/listado'));
    }

    public function editarMascotaForm($id)
    {
        $mascota = Mascota::findOrFail($id);
        $razas = Raza::all();
        $categorias = Categoria::all();
        return view('admin.editar_mascotas', compact('mascota', 'razas', 'categorias'));
    }

    public function editarMascota (Request $request, $id)
    {
        $request->validate(Mascota::$rules, Mascota::$errorMessages);

        $dataMascota = $request->input();

        if($request->hasFile('imagen')){
            $img = $request->imagen;
            $nombreImg = time() . "." . $img->extension();

            $img->move(public_path('/imagenes/petsImgs'), $nombreImg);
            $dataMascota['imagen'] = $nombreImg;
        }

        $mascota = Mascota::findOrFail($id);

        $mascota->update($dataMascota);

        return redirect(url('/admin/mascotas/listado'));
    }


    public function eliminarMascota($id)
    {
        $mascota = Mascota::findOrFail($id);

        $mascota->delete();

        return redirect(url('/admin/mascotas/listado'))
            ->with('message', 'Mascota eliminada correctamente.');
    }
}
