<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<!-- Material Design -->
    <link rel="stylesheet" href="{{ url('css/semantic-ui/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">

    <script src="{{ url('css/semantic-ui/jquery-3.1.min.js') }}"></script>
    <script src="{{ url('css/semantic-ui/semantic.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>

</head>
<body>
<header>
    @if(!Auth::guest())
        <div class="ui secondary  menu">
            <div class="logo">
                <img src="{{url('imagenes/logo_min.png')}}">
            </div>
            <a class="active item" href="{{url('home')}}">
                Home
            </a>
            <a class="item"  href="{{url('about')}}">
                Acerca de nosotros
            </a>
            @if(Auth::user()->permisos === 1)
            <a class="item"  href="{{url('admin')}}">
               Administrar
            </a>
            @endif
            <div class="right menu">
                <div class="item">
                    <a class="ui image label">
                        <img src="{{url('/imagenes/user.png')}}">
                        {{ Auth::user()->email }}
                    </a>
                </div>
                <a class="salir-item ui item" href="{{url('logout')}}">
                    Salir
                </a>
            </div>
        </div>
    @endif
</header>
<div class="ui equal width center aligned padded grid">
    <div class="row"></div>
    <div class="content-main row">
        <div class="padding-contents ui container">
            @yield('main')
        </div>
    </div>
</div>
<footer class="footer-pet inverted ui bottom fixed menu">

   <p class="text-footer">PetCare &copy; 2019</p>

</footer>
</body>
</html>
