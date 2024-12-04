@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <div id="test-id-1" style="text-align: center; width: 100%; height: 600px" class="embed-pdf"
         data-url="https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf">
        <div id="loading" class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            let embed_pdfs = {};

            // Criação dos visualizadores de PDF
            $('.embed-pdf').each(function () {
                const $pdfViewer = $('<iframe src="https://docs.google.com/viewer?url=' + $(this).data('url') + '&embedded=true" style="width: 100%; height: 100%" frameborder="0" scrolling="no"></iframe>');
                $pdfViewer.appendTo($(this));
                console.log($(this).attr('id') + " created");
                embed_pdfs[$(this).attr('id')] = 'created';

                // Configurar evento de carregamento do iframe
                $pdfViewer.on('load', function () {
                    embed_pdfs[$(this).parent('.embed-pdf').attr('id')] = 'loaded';
                    $(this).siblings('.loader').remove(); // Remove o loader, se existir

                    // Oculta o elemento com id específico
                    $('#loading').css('display', 'none');

                    console.log($(this).parent('.embed-pdf').attr('id') + " loaded");
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
