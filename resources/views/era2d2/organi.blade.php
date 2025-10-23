@extends('era2d2.header')

@section('title', 'Organização e Método')

@section('description', 'Aqui está um resumo do que é a organização e método e do nosso trabalho')

@section('main')
    <main id="main">
        <section class="section4">
            <div class="container grid">
                <div class="page-header">
                    <h1 class="title">Organização e Método</h1>
                    <div class="text">
                        <p>&emsp;A equipe de Organização e Método é um subgrupo do ERA2-D2 para o Torneio Brasil de
                            Robótica
                            (TBR), com o objetivo principal de garantir a eficiência e a eficácia das operações e
                            atividades do grupo, gerenciando a equipe de forma eficaz.</p>
                        <p>&emsp;Para a categoria High (de 15 a 19 anos), o TBR desafiou a equipe a ter uma boa gestão
                            da
                            temporada. A subequipe de Organização e Método decidiu desenvolver um Plano de Ação Para a
                            Temporada, distribuindo as tarefas em um cronograma detalhado que inclui as ações a serem
                            realizadas, os prazos de realização, os responsáveis pelas atividades, os insumos
                            necessários e os resultados esperados. A equipe também mantém uma comunicação eficaz e um
                            acompanhamento contínuo do progresso das atividades.</p>
                        <p>&emsp;Além disso, a equipe de Organização e Método destaca a importância de um planejamento
                            estratégico bem definido e da adoção de métodos ágeis para lidar com imprevistos e mudanças
                            de escopo. A implementação dessas práticas contribui para a melhoria contínua dos processos,
                            assegurando que a equipe esteja sempre alinhada com os objetivos do TBR e preparada para
                            enfrentar os desafios da temporada.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita da Organização e Método para o TBR
                        2024</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoftsolutions.com.br/public/pdf/organi.pdf">
                            <div id="loading" class="spinner-border" role="status">
                                <span class="sr-only">Carregando...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {

            let embed_pdfs = {};

            $('.embed-pdf').each(function () {
                const $pdfViewer = $('<iframe style="width: 100%; height: 100%" frameborder="0" scrolling="no"></iframe>');
                $pdfViewer.appendTo($(this));
                const pdfUrl = $(this).data('url');
                $pdfViewer.attr('src', 'https://docs.google.com/viewer?url=' + pdfUrl + '&embedded=true');

                $pdfViewer.on('load', function () {
                    $('#loading').hide();
                });
            });
        });
    </script>
@endsection
