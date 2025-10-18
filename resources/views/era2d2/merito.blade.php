@extends('era2d2.header')

@section('title', 'Mérito Científico')

@section('description', 'Aqui está um resumo do que é o mérito científico e do nosso trabalho')

@section('main')
    <main id="main">
        <section class="section4">
            <div class="container grid">
                <div class="page-header">
                    <h1 class="title">Mérito Científico</h1>
                    <div class="text">
                       <p>&emsp;A equipe de Mérito Científico é um subgrupo do ERA2-D2 no Torneio Brasil de Robótica (TBR), responsável por desenvolver a pesquisa teórica e científica que fundamenta o projeto da equipe. Para a temporada 2025, inspirada no 15º Objetivo de Desenvolvimento Sustentável da ONU — Vida Terrestre — o desafio propõe criar soluções tecnológicas que contribuam para a preservação dos ecossistemas e da biodiversidade.</p>

<p>&emsp;O grupo de Mérito Científico buscou compreender os impactos da ação humana sobre o equilíbrio ambiental e desenvolveu uma proposta voltada à conservação de habitats terrestres, com foco no reflorestamento e na proteção de espécies nativas. A equipe utilizou pesquisas de campo e dados ambientais para construir um embasamento sólido e propor ações práticas e sustentáveis.</p>

<p>&emsp;Com base em estudos multidisciplinares, o Mérito Científico reafirma o compromisso do ERA2-D2 com a sustentabilidade e a inovação, demonstrando que a robótica e a ciência podem caminhar juntas na proteção do planeta. O projeto visa inspirar novas formas de interação entre tecnologia e natureza, promovendo o cuidado com a vida terrestre para as próximas gerações.</p>

                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita do Mérito Científico para o TBR
                        2025</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoftsolutions.com.br/public/pdf/merito.pdf">
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

            // Criação dos visualizadores de PDF
            $('.embed-pdf').each(function () {
                const $pdfViewer = $('<iframe style="width: 100%; height: 100%" frameborder="0" scrolling="no"></iframe>');
                $pdfViewer.appendTo($(this));
                console.log($(this).attr('id') + " created");
                embed_pdfs[$(this).attr('id')] = 'created';

                // Inicia o carregamento do PDF
                const pdfUrl = $(this).data('url');
                $pdfViewer.attr('src', 'https://docs.google.com/viewer?url=' + pdfUrl + '&embedded=true');
                console.log("Carregamento iniciado para o PDF em: " + pdfUrl);

                // Configurar evento de carregamento completo
                $pdfViewer.on('load', function () {
                    embed_pdfs[$(this).parent('.embed-pdf').attr('id')] = 'loaded';
                    $(this).siblings('.loader').remove(); // Remove o loader, se existir
                    $('#loading').css('display', 'none'); // Oculta o ícone ao finalizar o carregamento
                    console.log($(this).parent('.embed-pdf').attr('id') + " fully loaded");
                });
            });

            // Monitoramento e tentativa de recarregar PDFs com falha
            let embed_pdf_check = setInterval(function () {
                let remaining_embeds = 0;
                $.each(embed_pdfs, function (key) {
                    try {
                        // Verifica se o iframe está vazio
                        if ($($('#' + key)).find('iframe').contents().find("body").contents().length === 0) {
                            remaining_embeds++;
                            console.log(key + " resetting");
                            $($('#' + key)).find('iframe').attr('src', 'https://docs.google.com/viewer?url=' + $('#' + key).data('url') + '&embedded=true');
                        }
                    } catch (err) {
                        console.log(key + " reloading");
                    }
                });

                if (!remaining_embeds) {
                    clearInterval(embed_pdf_check); // Interrompe o intervalo quando todos os PDFs carregaram
                }
            }, 1000);
        });
    </script>
@endsection
