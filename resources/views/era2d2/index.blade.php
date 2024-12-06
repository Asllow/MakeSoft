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
                <div class="cards grid">
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
                    <div class="card">
                        <h3 class="title">PH</h3>
                        <div class="text">
                            <p>O potencial hidrogênico(pH) de uma solução aquosa é medido por meio da concentração de
                                íons
                                de hidrogênio nessa solução, é representado por uma faixa que vai de 0 a 14, sendo
                                consideradas soluções acidas números menores que 7, neutras iguais a 7 e básicas,
                                maiores
                                que 7. Para a vida na água se manter, o pH deve estar entre 6 e 9, níveis diferentes
                                desses
                                levam a morte dos organismos marinhos. Os mesmos níveis se aplicam a água própria para o
                                consumo. Nos últimos anos os oceanos e aquíferos estão apresentando um pH acido, que
                                ocorre
                                principalmente a partir da absorção de CO₂ vindo da atmosfera e produzido pelo ser
                                humano.
                                Esse fenômeno impacta tanto na vida marinha, prejudicando o desenvolvimento e a
                                reprodução
                                dos seres, quanto na humana, com a redução de peixes e outras fontes de alimentos,
                                atrapalhando a alimentação e emprego de milhões de pessoas. O monitoramento do pH das
                                águas
                                mostra a sua importância com base nas informações acima, visando proteção e restauração
                                da
                                vida aquática.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'ph') }}">Gráfico de PH</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Temperatura</h3>
                        <div class="text">
                            <p>A temperatura da água é um dos fatores que mais interfere na preservação e conservação de
                                ecossistemas aquáticos. Ela mantém o equilíbrio das espécies que dependem de faixas de
                                temperatura específicas, contém a proliferação de algas e influencia migrações e
                                reprodução
                                de espécies. Também influencia os níveis de oxigênio dissolvido, que são cruciais para a
                                vida na água.</p>
                            <p>Além disso, a medição da temperatura aquática ajuda na interpretação do impacto do
                                aquecimento global e da poluição térmica nos corpos d'água e na gestão de recursos
                                hídricos.
                                Os esforços para monitorar e controlar os níveis da temperatura da água são vitais para
                                a
                                saúde dos ecossistemas presentes na água e a sustentabilidade ambiental.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'temperatura') }}">Gráfico de
                                Temperatura</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="title">Turbidez</h3>
                        <div class="text">
                            <p>Turbidez da água é a medida da transparência da água e indica a quantidade de partículas
                                em
                                suspensão que estão presentes. Ela é um fator de monitoramento importante para a
                                avaliação
                                da qualidade da água, tanto para o consumo e uso em processos industriais, quanto para a
                                vida presente em ecossistemas aquáticos. Sedimentos, como partículas de solo que entram
                                na
                                água devido à erosão ou atividades humanas, matéria orgânica (folhas, galhos e outros
                                detritos), microorganismos e poluentes industriais são fatores que interferem na
                                claridade
                                da água. A ausência de acompanhamento preventivo gera maiores gastos com processos de
                                tratamento de água. A medição é feita por meio de um turbidímetro, que avalia a
                                quantidade
                                de luz refletida pelas partículas em suspensão e se dá em unidades de NTU (Unidades
                                Nefelométricas de Turbidez). Para o consumo humano, a OMS indica que a turbidez da água
                                não
                                exceda 5 NTU e, idealmente, seja inferior a 1 NTU. E para corpos d'água naturais, varia
                                de
                                acordo com a legislação local e os usos específicos da água.</p>
                        </div>
                        <div class="hold-button">
                            <a class="button" href="{{ route('era.grafico', 'turbidez') }}">Gráfico de Turbidez</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
