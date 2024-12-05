@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
    <main id="main">
        <nav class="section">
            <div class="section1">
                <h1>Rios de Dados</h1>
                <h2>Monitoramento em tempo real da qualidade da água</h2>
                <div class="project-presentation">
                    <div class="text">
                    </div>
                    @yield('animation')
                </div>
            </div>
        </nav>
    </main>
@endsection
