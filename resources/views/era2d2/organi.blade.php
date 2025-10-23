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
                       <p>&emsp;A equipe de Organização e Método é um subgrupo do ERA2-D2 no Torneio Brasil de Robótica (TBR), responsável por garantir que as atividades da equipe sejam realizadas de forma organizada, eficiente e colaborativa ao longo da temporada 2025. Nesta edição, com o tema “Vida Terrestre”, o grupo buscou desenvolver estratégias que unissem planejamento, comunicação e sustentabilidade.</p>

<p>&emsp;O principal foco da subequipe foi estruturar um cronograma funcional e dinâmico, que organizasse as tarefas, prazos, responsáveis e recursos necessários para cada etapa do projeto. O planejamento foi elaborado com base em metodologias ágeis, permitindo que o grupo se adaptasse rapidamente às mudanças e desafios encontrados durante o desenvolvimento do robô e das apresentações.</p>

<p>&emsp;Além disso, a equipe adotou práticas que incentivam a cooperação e a responsabilidade entre os membros, garantindo que todos compreendessem seus papéis dentro do ERA2-D2. Dessa forma, a Organização e Método contribui para o crescimento coletivo, promovendo uma gestão eficiente, participativa e alinhada aos valores do TBR 2025 e ao compromisso com a sustentabilidade e a preservação da vida terrestre.</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="divider1"></div>
        <section class="section3">
            <div class="container grid">
                <div class="section-pdf">
                    <h2 class="subtitle">Aqui, você verá o nosso projeto e escrita da Organização e Método para o TBR
                        2025</h2>
                    <i class="bi bi-arrow-down-circle i-color"></i>
                    <div class="pdf">
                        <div id="test-id-1" style="text-align: center; width: 100%; height: 100%" class="embed-pdf"
                             data-url="https://makesoftsolutions.com.br/public/pdf/ORGANI2025.pdf">
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
