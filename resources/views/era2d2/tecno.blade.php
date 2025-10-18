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
                       <p>&emsp;A equipe de Tecnologia e Engenharia é um subgrupo do ERA2-D2 no Torneio Brasil de Robótica (TBR), responsável por desenvolver soluções inovadoras que integrem tecnologia e sustentabilidade. Em 2025, com o tema “Vida Terrestre”, o desafio incentiva a criação de projetos que contribuam para a proteção da biodiversidade e a restauração dos ecossistemas naturais.</p>

<p>&emsp;A subequipe desenvolveu um robô autônomo baseado no kit EV3, programado para executar as missões práticas do torneio de forma precisa e eficiente. Além da construção do robô, o grupo também busca aprimorar competências técnicas em eletrônica, programação e design de sistemas, aplicando a robótica como ferramenta de apoio à preservação ambiental.</p>

<p>&emsp;Com espírito colaborativo e foco na inovação, os integrantes da equipe unem esforços para transformar conhecimento em ação, desenvolvendo soluções criativas, sustentáveis e alinhadas ao compromisso do ERA2-D2 com a conservação da vida terrestre.</p>

            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita da Tecnologia e Engenharia para o TBR
                        2024</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoftsolutions.com.br/public/pdf/tecno.pdf">
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
