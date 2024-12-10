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
                        <p>&emsp;Essa é uma apresentação do nosso projeto para o Torneio TBR 2024. A equipe ERA2-D2
                            desenvolveu uma plataforma de monitoramento aquático com um propósito claro: contribuir para
                            a preservação dos recursos hídricos e promover um futuro sustentável. Assim, essa plataforma
                            é capaz de registrar parâmetros como pH, turbidez, níveis de oxigênio dissolvido,
                            temperatura e condutividade.</p>
                        <p>&emsp;Inspirada no 6º Objetivo de Desenvolvimento Sustentável da ONU (Água Potável e
                            Saneamento), a
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
                <div class="cards grid">
                    <div id="condutividade" class="card">
                        <h3 class="title">Condutividade</h3>
                        <div class="text">
                            <p>A condutividade elétrica da água é um parâmetro que reflete sua capacidade de conduzir
                                correntes elétricas, servindo como um indicador da presença e concentração de íons na
                                solução, como sais, ácidos e bases. A condutividade é influenciada pelos tipos e
                                concentrações de íons presentes: íons com maior carga elétrica e menor raio hidratado
                                tendem a aumentar a capacidade de condução da água.</p>
                            <p>Medições realizadas com um condutímetro permitem identificar alterações na qualidade da
                                água, detectar fontes de poluição e monitorar mudanças na composição química,
                                especialmente em águas subterrâneas. Esses dados são essenciais para a gestão eficiente
                                dos recursos hídricos e estudos hidrogeológicos. O monitoramento contínuo da
                                condutividade elétrica desempenha um papel crucial na preservação e proteção de
                                aquíferos, garantindo a sustentabilidade dos ecossistemas aquáticos e a saúde
                                ambiental.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'condutividade') }}">Gráfico de
                                Condutividade</a>
                        </div>
                    </div>
                    <div id="ph" class="card">
                        <h3 class="title">PH</h3>
                        <div class="text">
                            <p>
                                O potencial hidrogeniônico(pH) de uma solução aquosa é medido por meio da concentração
                                de íons de hidrogênio nessa solução, é representado por uma faixa que vai de 0 a 14,
                                sendo consideradas soluções acidas números menores que 7, neutras iguais a 7 e básicas,
                                maiores que 7. Para a vida na água se manter, o pH deve estar entre 6 e 9, níveis
                                diferentes desses levam a morte dos organismos marinhos. Os mesmos níveis se aplicam a
                                água própria para o consumo.
                            </p>
                            <p>
                                Nos últimos anos os oceanos e aquíferos estão apresentando um pH acido, que ocorre
                                principalmente a partir da absorção de CO₂ vindo da atmosfera e produzido pelo ser
                                humano. Esse fenômeno impacta tanto na vida marinha, prejudicando o desenvolvimento e a
                                reprodução dos seres, quanto na humana, com a redução de peixes e outras fontes de
                                alimentos, atrapalhando a alimentação e emprego de milhões de pessoas. O monitoramento
                                do pH das águas mostra a sua importância com base nas informações acima, visando
                                proteção e restauração da vida aquática.
                            </p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'ph') }}">Gráfico de PH</a>
                        </div>
                    </div>
                    <div id="temperatura" class="card">
                        <h3 class="title">Temperatura</h3>
                        <div class="text">
                            <p>A temperatura da água é um dos fatores mais determinantes para a preservação e
                                conservação de ecossistemas aquáticos. Ela regula o equilíbrio das espécies que dependem
                                de faixas de temperatura específicas para sobreviver, controlando tanto a proliferação
                                de algas quanto o comportamento de migração e reprodução de diversas espécies. Além
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
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'temperatura') }}">Gráfico de
                                Temperatura</a>
                        </div>
                    </div>
                    <div id="turbidez" class="card">
                        <h3 class="title">Turbidez</h3>
                        <div class="text">
                            <p>Turbidez da água é a medida da transparência da água e indica a quantidade de partículas
                                em suspensão que estão presentes. Ela é um fator de monitoramento importante para a
                                avaliação da qualidade da água, tanto para o consumo e uso em processos industriais,
                                quanto para a vida presente em ecossistemas aquáticos. Sedimentos, como partículas de
                                solo que entram na água devido à erosão ou atividades humanas, matéria orgânica (folhas,
                                galhos e outros detritos), microorganismos e poluentes industriais são fatores que
                                interferem na claridade da água.</p>
                            <p>A ausência de acompanhamento preventivo gera maiores gastos com processos de tratamento
                                de água. A medição é feita por meio de um turbidímetro, que avalia a quantidade de luz
                                refletida pelas partículas em suspensão e se dá em unidades de NTU (Unidades
                                Nefelométricas de Turbidez). Para o consumo humano, a OMS indica que a turbidez da água
                                não exceda 5 NTU e, idealmente, seja inferior a 1 NTU. E para corpos d'água naturais,
                                varia de acordo com a legislação local e os usos específicos da água.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'turbidez') }}">Gráfico de Turbidez</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider1"></div>
    </main>
@endsection
