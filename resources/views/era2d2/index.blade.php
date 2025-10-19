@extends('era2d2.header')

@section('title', 'ERA2-D2')

@section('description', 'Esse é o site da equipe de robótica ERA2D2, destinada ao Torneio Brasil de Robótica - TBR, categoria HIGH')

@section('main')
<main id="main">
    <section class="section" id="home">
        <div class="container page1">
            <h1 class="title">Terra Viva</h1>
            <h2 class="title subtitle">Monitoramento e preservação dos ecossistemas terrestres</h2>

            <div class="project-presentation" style="display: flex; align-items: center; justify-content: space-between; gap: 40px; flex-wrap: wrap;">
                <div class="text" style="flex: 1; min-width: 300px;">
                    <p>&emsp;A ERA2-D2 é formada por alunos do CEFET-MG – Campus Divinópolis e foi criada em 2023 pelo grupo Estudos de Robótica e Automação (ERA). Em 2024, conquistou 1º lugar em Mérito Científico e, em 2025, chega com uma formação totalmente nova, composta por nove integrantes e orientada pelo técnico João Luiz Vieira e pelo mentor Diêgo Fernandes da Cruz. O grupo busca aperfeiçoar o desempenho técnico e fortalecer suas competências em programação, eletrônica e trabalho em equipe.</p>
                    <p>&emsp;Inspirada no 15º Objetivo de Desenvolvimento Sustentável da ONU (Vida Terrestre), a equipe ERA2-D2 desenvolve soluções tecnológicas voltadas à preservação dos ecossistemas. O projeto utiliza a robótica para monitorar e proteger habitats naturais, reforçando o compromisso com a sustentabilidade e a vida no planeta.</p>
                </div>

                <div class="image-animation" style="flex: 1; min-width: 300px; text-align: center;">
                    <img src="{{ asset('public/img/sustentabilidade.jpg') }}" alt="ERA2-D2 Vida Terrestre" style="width: 100%; max-width: 400px; border-radius: 15px;">
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
                    <p>Somos o ERA2D2, uma equipe de robótica formada por estudantes do ensino médio do CEFET-MG, em Divinópolis, Minas Gerais. Nossa jornada começou no início de 2023, dentro do grupo Estudos de Robótica e Automação (ERA), com o sonho de competir na categoria High do Torneio Brasil de Robótica (TBR).</p>
                    <p>O nome ERA2D2 nasceu em uma de nossas primeiras reuniões, quando decidimos unir nossa identidade com o ERA à paixão de muitos de nós por Star Wars. Assim, escolhemos homenagear o icônico e carismático R2D2, que agora também inspira nossa criatividade e espírito de equipe.</p>
             <br 
                 br>
              <br
                  br>
                     <br
                  br>
                     <br
                  br>
                 
            </div>
            </div>
        </div>

        <div class="cards grid">
            <div id="condutividade" class="card">
                <h3 class="title">Umidade do Solo</h3>
                <div class="text">
                    <p>&emsp;A umidade do solo é um dos fatores mais importantes para o equilíbrio dos ecossistemas terrestres. Ela determina a disponibilidade de água para as plantas, influencia o crescimento da vegetação e regula processos biológicos como a decomposição da matéria orgânica. Manter níveis adequados de umidade é essencial para garantir a fertilidade do solo e a sobrevivência da fauna e flora que dele dependem.</p>
                    <p>&emsp;O monitoramento da umidade do solo permite compreender melhor as variações climáticas, prevenir períodos de seca e otimizar o uso da irrigação. Essa medição é fundamental para práticas agrícolas sustentáveis e para a conservação ambiental, ajudando a preservar a vida terrestre em todas as suas formas.</p>
                </div>
                <div class="hold-button">
                    <a class="button" href="{{ route('era.grafico', 'condutividade') }}">Gráfico de Umidade</a>
                </div>
            </div>

            <div id="ph" class="card">
                <h3 class="title">Temperatura do Solo</h3>
                <div class="text">
                    <p>&emsp;A temperatura do solo exerce papel determinante na germinação das sementes, no crescimento das plantas e na atividade dos microrganismos responsáveis pela decomposição da matéria orgânica. Variações extremas de temperatura podem afetar o desenvolvimento da vegetação e comprometer a estabilidade dos ecossistemas terrestres.</p>
                    <p>&emsp;O acompanhamento contínuo da temperatura do solo possibilita identificar os impactos das mudanças climáticas, avaliar o equilíbrio térmico do ambiente e orientar estratégias de manejo sustentável. Essa análise auxilia na manutenção da biodiversidade e na proteção da vida terrestre.</p>
                </div>
                <div class="hold-button button-ph">
                    <a class="button" href="{{ route('era.grafico', 'ph') }}">Gráfico de Temperatura</a>
                </div>
            </div>

            <div id="temperatura" class="card">
                <h3 class="title">Índice de Vegetação (NDVI)</h3>
                <div class="text">
                    <p>&emsp;O Índice de Vegetação por Diferença Normalizada (NDVI) é uma métrica que avalia a densidade e a vitalidade da cobertura vegetal, sendo amplamente utilizado em estudos de reflorestamento e conservação. Através da análise de imagens e sensores, o NDVI permite identificar áreas degradadas e monitorar o crescimento da vegetação ao longo do tempo.</p>
                    <p>&emsp;A observação desse indicador contribui para entender o impacto das ações humanas e das mudanças climáticas sobre o meio ambiente, promovendo medidas eficazes de preservação e recuperação da vida terrestre. Ele é essencial para garantir o equilíbrio dos ecossistemas e a sustentabilidade das florestas.</p>
                </div>
                <div class="hold-button button-temperatura">
                    <a class="button" href="{{ route('era.grafico', 'temperatura') }}">Gráfico de NDVI</a>
                </div>
            </div>

            <div id="turbidez" class="card">
                <h3 class="title">Qualidade do Ar</h3>
                <div class="text">
                    <p>&emsp;A qualidade do ar é um elemento essencial para a manutenção da vida terrestre. A presença de poluentes atmosféricos, como dióxido de carbono, ozônio e partículas em suspensão, pode afetar diretamente a saúde dos ecossistemas, interferindo no crescimento das plantas e na sobrevivência de diversas espécies.</p>
                    <p>&emsp;Monitorar a qualidade do ar é fundamental para identificar fontes de poluição, compreender os impactos da atividade humana e desenvolver estratégias que reduzam a emissão de gases nocivos. A preservação da pureza do ar é vital para garantir o equilíbrio ambiental e o bem-estar de todos os seres vivos do planeta.</p>
                </div>
                <div class="hold-button">
                    <a class="button" href="{{ route('era.grafico', 'turbidez') }}">Gráfico de Qualidade do Ar</a>
                </div>
            </div>
        </div>
    </section>

    <div class="divider1"></div>
</main>
@endsection 
