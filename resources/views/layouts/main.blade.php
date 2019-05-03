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

</head>
<body>
<header>
    @if(!Auth::guest())
        <div class="ui secondary  menu">
            <div class="logo">
                <img src="{{url('imagenes/logo_min.png')}}">
            </div>
            <a class="active item">
                Home
            </a>
            <a class="item">
                Messages
            </a>
            <a class="item">
                Friends
            </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <a class="ui item" href="{{url('logout')}}">
                    Salir
                </a>
            </div>
        </div>
    @endif
</header>
<div class="ui equal width center aligned padded grid">
    <div class="row"></div>
    <div class="row">
        <div class="padding-contents ui container">
            @yield('main')
        </div>
    </div>
</div>
<footer class="footer-pet inverted ui bottom fixed menu">

   <p style="margin: 30px auto;">PetCare &copy; 2019</p>

</footer>
</body>
</html>
