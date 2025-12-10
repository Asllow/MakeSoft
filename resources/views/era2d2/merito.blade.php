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
                       <p>&emsp;O Mérito Científico do ERA2-D2, na Temporada 2025 do Torneio Brasil de Robótica (TBR), tem como principal foco o Objetivo de Desenvolvimento Sustentável nº 15 da ONU — “Vida Terrestre”, que propõe proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres. Dentro desse contexto, a equipe desenvolveu um projeto voltado à conservação da biodiversidade e à gestão responsável dos recursos naturais.</p>

<p>&emsp;O grupo buscou compreender os desafios ambientais enfrentados nos ecossistemas brasileiros, como o desmatamento, a degradação do solo e a perda de habitats naturais, propondo soluções tecnológicas acessíveis que auxiliem no monitoramento e na preservação desses ambientes. Assim, o projeto une ciência e tecnologia para gerar impacto positivo e contribuir diretamente com os princípios da sustentabilidade.</p>

<p>&emsp;Para isso, foram utilizados sensores e dispositivos de automação capazes de coletar dados ambientais e transformá-los em informações úteis para análise e tomada de decisão. Essa abordagem reforça o compromisso do ERA2-D2 em utilizar a robótica como ferramenta de apoio à conservação ambiental, estimulando o pensamento científico e a inovação entre os membros da equipe.</p>

<p>&emsp;Mais do que atender aos requisitos do torneio, o Mérito Científico do ERA2-D2 reflete o desejo de seus integrantes em aplicar o conhecimento técnico adquirido em sala de aula para promover mudanças reais na sociedade. O projeto representa o espírito da equipe — comprometido com a pesquisa, o aprendizado e a preservação da vida terrestre.</p>

                    </div>
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
                             data-url="https://makesoftsolutions.com.br/public/pdf/MERITOO2025.pdf">
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

