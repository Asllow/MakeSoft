<!DOCTYPE html>
<html>

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
