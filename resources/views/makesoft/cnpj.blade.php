@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe id="iframeID" name="iframeID"
            src="https://docs.google.com/viewer?url=https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf&embedded=true"
            style="width:1000px; height:600px;" frameborder="0">
    </iframe>
    <script>
        function reloadIFrame() {
            document.getElementById("ifm").src = document.getElementById("iframeID").src;
        }

        timerId = setInterval("reloadIFrame();", 2000);

        $(document).ready(function () {
            $('#iframeID').on('load', function () {
                clearInterval(timerId);
                console.log("Finally Loaded");
            });
        });
    </script>
@endsection
