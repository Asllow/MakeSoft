@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="{{ asset('public/laraview/#../pdf/cartaoCNPJ.pdf') }}" width="1000px" height="600px" allowfullscreen
            webkitallowfullscreen></iframe>
@endsection
