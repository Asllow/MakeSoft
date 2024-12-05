@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
    <main id="main">
        <section class="section" id="home">
            <div class="container grid">
                <h1>Rios de Dados</h1>
                <h2>Monitoramento em tempo real da qualidade da água</h2>
                <div class="project-presentation">
                    <div class="text">
                        <p></p>
                        <p></p>
                    </div>
                    @yield('animation')
                </div>
            </div>
        </section>
    </main>
@endsection
