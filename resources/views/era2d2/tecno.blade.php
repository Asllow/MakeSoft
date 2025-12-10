@extends('era2d2.header')

@section('title', 'Tecnologia e Engenharia')

@section('description', 'Aqui está um resumo do que é a tecnologia e engenharia e do nosso trabalho')

@section('main')
    <main id="main">
        <section class="section4">
            <div class="container grid">
                <div class="page-header">
                    <h1 class="title">Tecnologia e Engenharia</h1>
                    <div class="text">
                        
                        
                        <p>&emsp;A equipe de Tecnologia e Engenharia é um subgrupo do ERA2-D2 no Torneio Brasil de Robótica (TBR), responsável por desenvolver soluções inovadoras e sustentáveis que unam tecnologia e preservação ambiental. Na temporada 2025, com o tema “Vida Terrestre”, o grupo tem como objetivo aplicar a robótica na proteção dos ecossistemas e na valorização da biodiversidade.</p>

<p>&emsp;A subequipe trabalha na construção e programação de um robô autônomo utilizando o kit LEGO EV3, projetado para executar as missões do torneio com eficiência e precisão. Durante o processo, os integrantes aplicam conhecimentos de eletrônica, mecânica e lógica de programação, aprimorando suas habilidades técnicas e o trabalho em equipe.</p>

<p>&emsp;Além do desenvolvimento técnico, o grupo busca alinhar a tecnologia à responsabilidade ambiental, demonstrando que a robótica pode ser uma importante aliada na conservação do planeta. Assim, a equipe de Tecnologia e Engenharia reforça o compromisso do ERA2-D2 com a inovação, a sustentabilidade e o aprendizado contínuo.</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita da Tecnologia e Engenharia para o TBR
                        2025</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoftsolutions.com.br/public/pdf/TECNO2025.pdf">
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






