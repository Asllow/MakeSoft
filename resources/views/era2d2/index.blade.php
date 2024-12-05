@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
    <main id="main">
        <section class="section" id="home">
            <div class="container page1">
                <h1 class="title">Rios de Dados</h1>
                <h2 class="title subtitle">Monitoramento em tempo real da qualidade da água</h2>
                <div class="project-presentation">
                    <div class="text">
                        <p>Essa é uma apresentação do nosso projeto para o Torneio TBR 2024. A equipe ERA2-D2
                            desenvolveu uma plataforma de monitoramento aquático com um propósito claro: contribuir para
                            a preservação dos recursos hídricos e promover um futuro sustentável. Assim, essa plataforma
                            é capaz de registrar parâmetros como pH, turbidez, níveis de oxigênio dissolvido,
                            temperatura e condutividade.</p>
                        <p>Inspirada no 6º Objetivo de Desenvolvimento Sustentável da ONU (Água Potável e Saneamento), a
                            plataforma utiliza sensores para coletar dados em tempo real sobre parâmetros essenciais da
                            qualidade da água. Esses dados estão disponíveis para visualização e análise da qualidade da
                            água, facilitando a tomada de decisões informadas, a implementação de medidas corretivas e o
                            engajamento comunitário.</p>
                    </div>
                    @yield('animation')
                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section" id="equipe">
            <div class="container grid">
                <h2 class="title">A Equipe</h2>
                <div class="description">
                    <div class="image">
                        <img alt="Logo da Equipe" src="{{ asset('public/img/logoera2d2.jpeg') }}">
                    </div>
                    <div class="text">
                        <p>Somos o ERA2D2, uma equipe de robótica formada por estudantes do ensino médio do CEFET-MG, em
                            Divinópolis, Minas Gerais. Nossa jornada começou no início de 2023, dentro do grupo Estudos
                            de Robótica e Automação (ERA), com o sonho de competir na categoria High do Torneio Brasil
                            de Robótica (TBR).</p>
                        <p>O nome ERA2D2 nasceu em uma de nossas primeiras reuniões, quando decidimos unir nossa
                            identidade com o ERA à paixão de muitos de nós por Star Wars. Assim, escolhemos homenagear o
                            icônico e carismático R2D2, que agora também inspira nossa criatividade e espírito de
                            equipe.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider2"></div>
        <section class="section" id="equipe">
            <div class="container grid">
                <div class="card grid">
                    <div class="card">
                        <h3 class="title">Condutividade</h3>
                        <div class="text">
                            <p>A condutividade elétrica da água representa a sua capacidade de conduzir correntes
                                elétricas, sendo uma indicadora da presença de íons na solução, como sais e ácidos. A
                                concentração de íons e os seus tipos interferem na condução da água, onde íons com maior
                                carga elétrica e menos raio hidratado aumentam a condutividade.</p>
                            <p>Ela é medida utilizando um condutímetro e por meio dessa medição é possível detectar
                                fontes de poluição, o nível da qualidade da água e mudanças na composição química da
                                água subterrânea. Além de auxiliar na gestão de recursos hídricos e em estudos
                                hidrogeológicos, o monitoramento da condutividade elétrica da água é uma prática
                                essencial para a preservação e proteção de aquíferos e ecossistemas aquáticos.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'condutividade') }}">Gráfico de
                                Condutividade</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
