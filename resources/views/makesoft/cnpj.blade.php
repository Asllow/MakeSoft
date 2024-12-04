@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="{{ asset('public/laraview/#../pdf/cartaoCNPJ.pdf') }}" width="1000px" height="600px" allowfullscreen
            webkitallowfullscreen></iframe>
    <embed
        src="https://drive.google.com/viewerng/viewer?embedded=true&url=https://makesoft.net.br/public/pdf/cartaoCNPJ.pdf"
           width="500" height="375">
@endsection
