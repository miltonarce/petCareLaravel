@extends('layouts.main')

@section('title', 'Login PetCare')

@section('main')
    <div class="ui container">
        <div class="ui one column centered grid">
            <div class="column">
                <img src="{{url('imagenes/banner.png')}}">
            </div>
        </div>
        <div class="row">
            <div class="ui placeholder segment">
                <a class="ui blue ribbon label">Debe registrarse para poder ingresar.</a>
                <div class="ui two column stackable center aligned grid">
                    <div class="ui vertical divider">Or</div>
                    <div class="middle aligned row">
                        <div class="column padding-contents">
                            <form class="ui form" action="{{url('users/nuevo')}}" method="post">
                                @csrf
                                <div class="ui equal width form">
                                    <div class="fields">
                                        <div class="field">
                                            <label>Email</label>
                                            <input type="email" id="email" name="email" placeholder="Ingrese su Email">
                                            @if($errors->has('email'))
                                                <div class="ui pointing red basic label">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="password" id="password" name="password" placeholder="Ingrese su Password">
                                            @if($errors->has('email'))
                                                <div class="ui pointing red basic label">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>Nombre</label>
                                            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
                                            @if($errors->has('nombre'))
                                                <div class="ui pointing red basic label">{{ $errors->first('nombre') }}</div>
                                            @endif
                                        </div>
                                        <div class="field">
                                            <label>Apellido</label>
                                            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido">
                                            @if($errors->has('apellido'))
                                                <div class="ui pointing red basic label">{{ $errors->first('apellido') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="field">
                                            <label>DNI</label>
                                            <input type="text" id="dni" name="dni" placeholder="Ingrese un Número">
                                            @if($errors->has('dni'))
                                                <div class="ui pointing red basic label">{{ $errors->first('dni') }}</div>
                                            @endif
                                        </div>
                                        <div class="field">
                                            <label>Fecha de nacimiento</label>
                                            <input type="text" id="nacimiento" name="nacimiento" placeholder="Seleccione Fecha">
                                            @if($errors->has('nacimiento'))
                                                <div class="ui pointing red basic label">{{ $errors->first('nacimiento') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button class="ui primary button" type="submit">Crear cuenta</button>
                            </form>
                        </div>
                        <div class="column">
                            @if(Session::has('message'))
                                <div class="mensaje ui error message">
                                    <div class="header">Error de login.</div>
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                            @endif
                            <form class="ui form" action="<?= url('/login'); ?>" method="post">
                                @csrf
                                <h4 class="ui dividing header">Ingresar a PetCare</h4>
                                <div class="field">
                                    <label>Usuario</label>
                                    <input type="text" id="email" name="email" value="<?= old('email');?>" placeholder="Ingrese su usuario">
                                    @if($errors->has('email'))
                                        <div class="ui pointing red basic label">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class=" field">
                                    <label>Contraseña</label>
                                    <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
                                    @if($errors->has('password'))
                                        <div class="ui pointing red basic label">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <button class="ui button" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
