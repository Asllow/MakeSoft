@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="https://docs.google.com/viewer?url=https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf&embedded=true"
            style="width:1000px; height:600px;" frameborder="0">
    </iframe>
    <div id="test-id-1" style="text-align: center; width: 100%; height: 600px" class="embed-pdf"
         data-url="https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf"><span class="loader">Please wait...</span></div>
    <script>
        (document).ready(function () {

            let embed_pdfs = {};

            $('.embed-pdf').each(function () {
                var $pdfViewer = $('<iframe src="https://docs.google.com/viewer?url=' + $(this).data('url') + '&embedded=true" style="width: 100%; height: 100%" frameborder="0" scrolling="no"></iframe>');
                $pdfViewer.appendTo($(this));
                console.log($(this).attr('id') + " created");
                embed_pdfs[$(this).attr('id')] = 'created';
            });

            $(document).find('.embed-pdf iframe').load(function () {
                embed_pdfs[$(this).parents('.embed-pdf').attr('id')] = 'loaded';
                $(this).siblings('.loader').remove();
                console.log($(this).parents('.embed-pdf').attr('id') + " loaded");
            });

            let embed_pdf_check = setInterval(function () {
                let remaining_embeds = 0;
                $.each(embed_pdfs, function (key, value) {
                    try {
                        if ($($('#' + key)).find('iframe').contents().find("body").contents().length === 0) {
                            remaining_embeds++;
                            console.log(key + " resetting");
                            $($('#' + key)).find('iframe').attr('src', src = 'https://docs.google.com/viewer?url=' + $('#' + key).data('url') + '&embedded=true');
                        }
                    } catch (err) {
                        console.log(key + " reloading");
                    }
                });

                if (!remaining_embeds) {
                    clearInterval(embed_pdf_check);
                }
            }, 2000);
        });
    </script>
@endsection
