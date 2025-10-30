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
                           <p>A umidade do solo representa a quantidade de água retida entre as partículas do solo e é um dos
principais indicadores da sua fertilidade e vitalidade. A manutenção desse equilíbrio hídrico é
essencial para o desenvolvimento das plantas, para a preservação dos ecossistemas terrestres e
para o combate à degradação ambiental.</p>

<p>No contexto da temporada 2025 – <strong>Vida Terrestre</strong>, compreender e monitorar a umidade do solo
permite prevenir a desertificação e o empobrecimento da terra, além de otimizar o uso dos recursos
hídricos na agricultura. Sensores de umidade possibilitam o acompanhamento preciso das
condições do solo, contribuindo para práticas de irrigação mais sustentáveis e para a conservação
da biodiversidade.</p>

<p>Controlar a umidade é garantir a base da vida terrestre. Essa medição contínua favorece a saúde do
solo, promove o equilíbrio entre tecnologia e meio ambiente e reforça o compromisso de proteger e
recuperar os ecossistemas brasileiros.</p>

                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'umidade') }}">Gráfico da Umidade do solo
                    </a>
                        </div>
                    </div>
                  
                    <div id="temperatura" class="card">
                        <h3 class="title">Temperatura</h3>
                        <div class="text">
                           <p>A umidade do solo representa a quantidade de água retida entre as partículas do solo e é um dos
principais indicadores da sua fertilidade e vitalidade. A manutenção desse equilíbrio hídrico é
essencial para o desenvolvimento das plantas, para a preservação dos ecossistemas terrestres e
para o combate à degradação ambiental.</p>

<p>No contexto da temporada 2025 – <strong>Vida Terrestre</strong>, compreender e monitorar a umidade do solo
permite prevenir a desertificação e o empobrecimento da terra, além de otimizar o uso dos recursos
hídricos na agricultura. Sensores de umidade possibilitam o acompanhamento preciso das
condições do solo, contribuindo para práticas de irrigação mais sustentáveis e para a conservação
da biodiversidade.</p>

<p>Controlar a umidade é garantir a base da vida terrestre. Essa medição contínua favorece a saúde do
solo, promove o equilíbrio entre tecnologia e meio ambiente e reforça o compromisso de proteger e
recuperar os ecossistemas brasileiros.</p>

                        </div>
                        <div class="hold-button button-temperatura">
                            <a class="button" href="{{ route('era.grafico', 'temperatura') }}">Gráfico de
                                Temperatura</a>
                        </div>
                    </div>
                 
        </section>
        <div class="divider1"></div>
    </main>
@endsection
