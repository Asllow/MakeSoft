@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
    <main id="main">
        <nav class="section">
            <h1>Rios de Dados</h1>
            <h2>Monitoramento em tempo real da qualidade da água</h2>
            <div class="project-presentation">
                <div class="text">
                    <p>Essa é uma apresentação do nosso projeto para o Torneio TBR 2024. A equipe ERA2-D2 desenvolveu
                        uma plataforma de monitoramento aquático com um propósito claro: contribuir para a preservação
                        dos recursos hídricos e promover um futuro sustentável. Assim, essa plataforma é capaz de
                        registrar parâmetros como pH, turbidez, níveis de oxigênio dissolvido, temperatura e
                        condutividade.</p>
                    <p>Inspirada no 6º Objetivo de Desenvolvimento Sustentável da ONU (Água Potável e Saneamento), a
                        plataforma utiliza sensores para coletar dados em tempo real sobre parâmetros essenciais da
                        qualidade da água. Esses dados estão disponíveis para visualização e análise da qualidade da
                        água, facilitando a tomada de decisões informadas, a implementação de medidas corretivas e o
                        engajamento comunitário.</p>
                </div>
                @yield('animation')
            </div>
        </nav>
    </main>
@endsection
