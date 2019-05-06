@extends('layouts.main')

@section('title', 'Admin Listado Mascotas')

@section('main')
    <div class="ui grid">
        @if(Session::has('message'))
            <div class="ui positive message">
                <i class="close icon"></i>
                <div class="header">
                    Proceso exitoso.
                </div>
                <p>{{Session::get('message') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="left floated eight wide column">
                <h2 class="ui header">
                    <i class="list alternate outline icon list-mascotas"></i>
                    <div class="content list-mascotas">
                        Listado de mascotas
                        <div class="sub header">Aquí veras el listado de mascotas cargadas, puedes agregar, editar o borrar las que desees.</div>
                    </div>
                </h2>
            </div>
            <div class="right floated two wide  column">
                <a href={{url('/admin/mascotas/nuevo')}} class="ui positive vertical animated button" tabindex="0">
                    <div class="hidden content">Agregar</div>
                    <div class="visible content">
                        <i class="plus icon"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <table class="ui orange table">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Raza</th>
            <th>Categoría</th>
            <th>Nacimiento</th>
            <th>Vacunas</th>
            <th>Adoptado</th>
            <th>Creado</th>
            <th>Modificado</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($mascotas as $mascota)
        <tr>
            <td><img class="img-thumbnail" src="{{url($mascota->imagen ? 'imagenes/petsImgs/'.$mascota->imagen : 'imagenes/no_image.png')}}" alt="Mascota thumbnail"></td>
            <td>{{$mascota->id_mascota}}</td>
            <td>{{$mascota->nombre}}</td>
            <td>{{$mascota->raza->nombre}}</td>
            <td>{{$mascota->categoria->nombre}}</td>
            <td>{{$mascota->nacimiento}}</td>
            <td class="{{$mascota->vacunas ? 'succes' : 'error'}}">{{$mascota->vacunas ? 'Si' : 'No'}}</td>
            <td>{{$mascota->adoptado ? 'Si' : 'No'}}</td>
            <td>{{$mascota->created_at}}</td>
            <td>{{$mascota->updated_at}}</td>
            <td>
                <div class="ui buttons">
                    <a class="ui button" href="{{ url('/admin/mascotas/'.$mascota->id_mascota.'/editar') }}">Editar</a>
                    <div class="or"></div>
                    <button class="deleteMascota ui negative button active" delete-id="{{$mascota->id_mascota}}">Borrar</button>
                    <div class="ui basic modal" data-id="{{$mascota->id_mascota}}">
                        <div class="ui icon header">
                            <i class="archive icon"></i>
                            Eliminar mascota?
                        </div>
                        <div class="content">
                            <p>Esta seguro que sea eliminar a la mascota {{$mascota->nombre}} ?</p>
                        </div>
                        <div class="actions">

                            <form action="{{ url('/admin/mascotas/'.$mascota->id_mascota .'/eliminar') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="ui red basic cancel inverted button">
                                    <i class="remove icon"></i>
                                    No
                                </div>
                            <button class="ui green ok inverted button">
                                <i class="checkmark icon"></i>
                                Sí
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection