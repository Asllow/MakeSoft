@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="{{ asset('public/laraview/#../pdf/cartaoCNPJ.pdf') }}"></iframe>
@endsection
