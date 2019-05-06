@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h2 class="ui header">
        <i class="paw icon home"></i>
        <div class="content home">
          Listado de mascotas
            <div class="sub header">Aquí veras el listado de mascotas en situación de calle.</div>
        </div>
    </h2>
    <div class="ui link cards">
        @foreach($mascotas as $mascota)
                <div class="card">
                    <div class="image">
                        <a href="{{url('index/'.$mascota->id_mascota)}}" >
                            <img class="img" src="{{url($mascota->imagen ? 'imagenes/petsImgs/'.$mascota->imagen : 'imagenes/no_image.png')}}" alt="Mascota">
                        </a>
                    </div>
                    <div class="content">
                        <div class="header">{{$mascota->nombre}}</div>
                        <div class="meta">
                            Categoria: {{$mascota->categoria->nombre}}
                        </div>
                        <div class="description">
                            Raza: {{$mascota->raza->nombre}}.
                        </div>
                    </div>
                    <div class="extra content">
                  <span class="right floated">
                     Fecha Publicación: <em> {{$mascota->created_at}}</em>
                  </span>
                        <span>
                    <i class="{{$mascota->vacunas ? 'succes' : 'error'}} syringe icon"></i>
                        Vacunas: {{$mascota->vacunas ? 'Si' : 'No' }}
                  </span>
                    </div>
                </div>
            @endforeach
    </div>
@endsection