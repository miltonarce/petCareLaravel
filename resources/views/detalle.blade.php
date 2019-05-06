@extends('layouts.main')

@section('title', 'Detalle Mascota'.$mascota->nombre)

@section('main')
    <div class="ui internally celled grid">
        <div class="row">
            <div class="three wide column">
                <div class="ui link cards">
                    <div class="card">
                        <div class="image">
                            <img class="img" src="{{url($mascota->imagen ? 'imagenes/petsImgs/'.$mascota->imagen : 'imagenes/no_image.png')}}" alt="Mascota">
                        </div>
                        <div class="content">
                            <div class="header">{{$mascota->nombre}}</div>
                            <div class="meta">
                                <a>Categoria: {{$mascota->id_categoria}}</a>
                            </div>
                            <div class="description">
                                Raza: {{$mascota->raza->nombre}}.
                            </div>
                        </div>
                        <div class="extra content">
                  <span class="right floated">
                   Fecha Publicación: {{$mascota->created_at}}
                  </span>
                            <span>
                    <i class="{{$mascota->vacunas ? 'succes' : 'error'}} syringe icon"></i>
                    Vacunas: {{$mascota->vacunas ? 'Si' : 'No' }}
                  </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ten wide column">
                <div class="ui raised very padded text container segment">
                    <h2 class="ui header">Descripción</h2>
                    <p>Fecha de Nacimiento: {{$mascota->nacimiento}}</p>
                    <p>Esta mascota @if($mascota->adoptado)<a class="ui teal tag label">fue adoptada.</a>@else <a class="ui tag label">no fue adoptada.</a>@endif</p>
                    <p>{{$mascota->descripcion}}</p>
                </div>
            </div>
            <div class="three wide column">
              <!--<button>Adoptar</button>-->
            </div>
        </div>
    </div>
@endsection