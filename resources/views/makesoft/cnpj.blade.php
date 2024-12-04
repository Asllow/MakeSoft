@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="https://docs.google.com/viewer?url=https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf&embedded=true"
            style="width:1000px; height:600px;" frameborder="0">
    </iframe>
    <script>
        let newValue = "https://docs.google.com/viewer?url=https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf&embedded=true";
        let $docViewer = $(`<iframe src="${newValue}" height="100%" width="100%"></iframe>`);
        //If using modern browser, use and embed object
        if (window.chrome || typeof (window.mozInnerScreenX) != "undefined")
            $docViewer = $(`<object width="100%" height="100%" data="${newValue}" type="application/pdf">
                    <embed src="${newValue}" type="application/pdf">
                        <p>This browser does not support PDFs.Please download the PDF to view it: <a href="${newValue}">Download PDF</a>.</p>
                    </embed>
                </object>`);
        //Add the new viewer
        $docViewer.appendTo($("#invoicePreview"));
    </script>
@endsection
