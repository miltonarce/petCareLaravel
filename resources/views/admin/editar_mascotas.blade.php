@extends('layouts.main')

@section('title', 'Admin Editar mascota'.$mascota->nombre)

@section('main')
    <div class="ui grid">
        <div class="row">
            <div class="left floated eight wide column">
                <h2 class="ui header">
                    <i class="edit icon list-mascotas"></i>
                    <div class="content list-mascotas">
                        Editar nueva mascota
                        <div class="sub header">Aquí podrás editar mascotas ya cargadas modificando los datos ingresados.</div>
                    </div>
                </h2>
            </div>
        </div>
    </div>
    <form class="ui form" action="{{  url('/admin/mascotas/'.$mascota->id_mascota .'/editar') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h4 class="ui dividing header">Datos de la mascota.</h4>
        <div class="field">
            <label>Nombre</label>
            <div class="field">
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $mascota->nombre) }}" placeholder="Ingrese un nombre">
                @if($errors->has('nombre'))
                    <div class="ui pointing red basic label">{{ $errors->first('nombre') }}</div>
                @endif
            </div>
        </div>
        <div class="field">
            <label>Fecha de nacimiento</label>
            <div class="field">
                <input type="text" id="nacimiento" name="nacimiento" value="{{ old('nombre', $mascota->nacimiento) }}" placeholder="YYYY-MM-DD" required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
                @if($errors->has('nacimiento'))
                    <div class="ui pointing red basic label">{{ $errors->first('nacimiento') }}</div>
                @endif
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Raza</label>
                <select id="id_raza" name="id_raza" class="ui fluid dropdown">
                    @foreach($razas as $raza)
                        <option value="{{$raza->id_raza}}" {{ $raza->id_raza == old('id_raza', $mascota->id_raza) ? 'selected' : '' }}>{{$raza->nombre}}</option>
                    @endforeach
                </select>
                @if($errors->has('id_raza'))
                    <div class="ui pointing red basic label">{{ $errors->first('id_raza') }}</div>
                @endif
            </div>
            <div class="field">
                <label>Categoría</label>
                <select class="ui fluid dropdown" id="id_categoria" name="id_categoria">
                    @foreach($categorias as $categoria)
                    <option  value="{{$categoria->id_categoria}}" {{ $categoria->id_categoria == old('id_categoria', $mascota->id_categoria) ? 'selected' : '' }}>{{$categoria->nombre}}</option>
                        @endforeach
                </select>
                @if($errors->has('id_categoria'))
                    <div class="ui pointing red basic label">{{ $errors->first('id_categoria') }}</div>
                @endif
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Vacunas</label>
                <select id="vacunas" name="vacunas" class="ui fluid dropdown">
                    <option value="1" {{ 1 == old('vacunas', $mascota->vacunas) ? 'selected' : '' }}>Si</option>
                    <option value="0" {{ 0 == old('vacunas', $mascota->vacunas) ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="field">
                <label>Adoptado</label>
                <select id="adoptado" name="adoptado" class="ui fluid dropdown">
                    <option value="1" {{ 1 == old('adoptado', $mascota->adoptado) ? 'selected' : '' }}>Si</option>
                    <option value="0" {{ 0 == old('adoptado', $mascota->adoptado) ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>
        <div class="field">
            <label>Imagen</label>
            <div class="image">
                <img class="img" src="{{url($mascota->imagen ? 'imagenes/petsImgs/'.$mascota->imagen : 'imagenes/no_image.png')}}" alt="Mascota">
            </div>
            <div class="field">
                <input type="file" id="imagen" name="imagen" placeholder="Ingrese una imagen">
                @if($errors->has('imagen'))
                    <div class="ui pointing red basic label">{{ $errors->first('imagen') }}</div>
                @endif
            </div>
        </div>
        <div class="field">
            <label>Descripcion</label>
            <textarea id="descripcion" name="descripcion"  placeholder="Ingrese una descripcion para la mascota...">{{ old('descripcion', $mascota->descripcion) }}</textarea>
            @if($errors->has('descripcion'))
                <div class="ui pointing red basic label">{{ $errors->first('descripcion') }}</div>
            @endif
        </div>
        <button class="ui button" tabindex="0">Cargar</button>
    </form>
@endsection