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
                        <p>A equipe do Mérito Científico é um subgrupo do ERA2-D2 para o Torneio Brasil de Robótica,
                            onde o objetivo principal é a extensão de pesquisas aprofundadas em tecnologia e robótica,
                            permitindo que os alunos pratiquem os conhecimentos adquiridos durante o curso. Nesse
                            sentido, relacionado ao Objetivo de Desenvolvimento Sustentável 6 (ODS 6) das Nações Unidas
                            como proposta para a categoria High (de 15 a 19 anos), o TBR desafiou a criação de soluções
                            para proteger e restaurar sistemas relacionados à água.</p>
                        <p>O Mérito, a partir de recursos viáveis e acessíveis, decidiu criar uma plataforma que
                            monitorasse os parâmetros qualitativos aquáticos, sendo eles, condutividade, pH, temperatura
                            e a turbidez. Sendo assim, o monitoramento contínuo desses parâmetros é crucial para a
                            identificação de possíveis contaminações, a gestão adequada de recursos hídricos e a
                            preservação da vida aquática, visando garantir a integridade dos recursos naturais e a
                            qualidade de vida das futuras gerações. Além disso, a equipe reafirma a importância de
                            tecnologias alcançáveis para comunidades e regiões em condições de difícil acesso aos
                            recursos hídricos ou em locais que estão suscetíveis à poluição.</p>
                        <p>Portanto, o Mérito Científico não apenas busca cumprir o desafio do TBR, mas também
                            contribuir de forma significativa para alcançar metas globais de sustentabilidade,
                            promovendo a conservação dos recursos hídricos para as futuras gerações.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita do Mérito Científico para o TBR
                        2024</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoft.net.br/public/pdf/teste.pdf">
                            <div id="loading" class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
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
