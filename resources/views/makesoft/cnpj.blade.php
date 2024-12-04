@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="{{ asset('public/laraview/#../pdf/cartaoCNPJ.pdf') }}" height="38rem"></iframe>
@endsection
