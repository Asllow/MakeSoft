@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
    <main id="main">
        <section class="section" id="home">
            <div class="container page1">
          <h1 class="title">Terra Viva</h1>
<h2 class="title subtitle">Soluções tecnológicas para a preservação dos ecossistemas terrestres</h2>
           
                <div class="bloco-sustentabilidade">
  <img alt="Sustentabilidade" src="{{ asset('public/img/sustentabilidade.jpg') }}">

                <div class="project-presentation">
                    <div class="text">
                        <p>&emsp;A ERA2-D2 é formada por alunos do CEFET-MG – Campus Divinópolis e foi criada em 2023 pelo grupo Estudos de Robótica e Automação (ERA).
Em 2024, conquistou 1º lugar em Mérito Científico e, em 2025, chega com uma formação totalmente nova, composta por oito integrantes e orientada pelo técnico João Luiz Vieira e pelo mentor Diêgo Fernandes da Cruz.
O grupo busca aperfeiçoar o desempenho técnico e fortalecer suas competências em programação, eletrônica e trabalho em equipe.</p>
                        <p>Inspirada no 15º Objetivo de Desenvolvimento Sustentável da ONU (Vida Terrestre), a equipe ERA2-D2 desenvolve soluções tecnológicas voltadas à preservação dos ecossistemas. O projeto utiliza a robótica para monitorar e proteger habitats naturais, reforçando o compromisso com a sustentabilidade e a vida no planeta.</p>
                    </div>
                </div>    
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
                <div class="cards grid">
                    <div id="condutividade" class="card">
                        <h3 class="title">Umidade do solo</h3>
                        <div class="text">
                           <p>A umidade do solo indica a quantidade de água presente nos poros do solo, sendo essencial
                        para o crescimento das plantas e manutenção da biodiversidade. A variação na umidade
                        influencia processos como infiltração, evaporação e absorção de nutrientes pelas raízes.</p>
                    <p>Medições regulares com sensores de umidade ajudam a monitorar a irrigação, prevenir
                        estresse hídrico em culturas agrícolas e gerenciar recursos hídricos de forma eficiente,
                        garantindo a saúde do solo e a sustentabilidade ambiental.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'umidade') }}">Gráfico da Umidade do solo
                    </a>
                        </div>
                    </div>
                  
                    <div id="temperatura" class="card">
                        <h3 class="title">Temperatura</h3>
                        <div class="text">
                            <p>A temperatura da água é um dos fatores mais determinantes para a preservação e
                                conservação de ecossistemas aquáticos. Ela regula o equilíbrio das espécies que dependem
                                de faixas de temperatura específicas para sobreviver, controlando tanto a proliferação
                                de algas quanto o comportamento de migração e reprodução de diversas espécies,
                                controlando suas condições de vida ideais. Além
                                disso, a temperatura influencia diretamente os níveis de oxigênio dissolvido, elemento
                                essencial para a manutenção da vida nos corpos d'água.</p>
                            <p>A medição e o monitoramento contínuo da temperatura são fundamentais para interpretar os
                                impactos do aquecimento global e da poluição térmica nos ecossistemas aquáticos. Esses
                                dados auxiliam na gestão eficiente dos recursos hídricos, permitindo ações de
                                conservação mais assertivas. Esforços para controlar alterações na temperatura da água
                                são cruciais não apenas para a saúde dos ecossistemas aquáticos, mas também para
                                garantir a sustentabilidade ambiental em um cenário de mudanças climáticas e crescente
                                pressão humana sobre os recursos naturais.</p>
                        </div>
                        <div class="hold-button button-temperatura">
                            <a class="button" href="{{ route('era.grafico', 'temperatura1') }}">Gráfico de
                                Temperatura</a>
                        </div>
                    </div>
                 
        </section>
        <div class="divider1"></div>
    </main>
@endsection
