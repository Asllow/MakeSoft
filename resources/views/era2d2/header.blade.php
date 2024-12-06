<!DOCTYPE html>
<html>
<head>
    {{-- Configuration --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <title>@yield('title')</title>
    @if($page=='home')
        <link href="{{asset("public/css/animation.css")}}" rel="stylesheet" type="text/css"/>
    @endif
    <link href="{{asset("public/css/app.css")}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("public/favicon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("public/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("public/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("public/favicon/site.webmanifest")}}">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
<header id="header">
    <nav class="container">
        <div class="menu">
            <ul class="grid">
                <li><a class='title @if($page=='home') active @endif' id='index' href='{{route('era.index')}}'>Home</a>
                </li>
                <li><a class='title @if($page=='merito') active @endif' id='merito' href='{{ route('era.merito') }}'>Mérito
                        Científico</a></li>
                <li><a class='title @if($page=='organi') active @endif' id='organi' href='{{ route('era.organi') }}'>Organização
                        e Método</a>
                </li>
                <li><a class='title @if($page=='tecno') active @endif' id='tecno' href='{{ route('era.tecno') }}'>Tecnologia
                        e Engenharia</a>
                </li>
                <div class='background'></div>
            </ul>
        </div>
        <div class='toggle bi bi-list'></div>
        <div class='toggle bi bi-x'></div>
    </nav>
</header>
@yield('main')
<script type="text/javascript" src="{{asset("public/js/app.js")}}"></script>
</body>
</html>
