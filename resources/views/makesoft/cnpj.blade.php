@extends('makesoft.index')
@section('title')
    Makesoft - Cartão CNPJ
@endsection

@section('content')
    <iframe src="{{ asset('/laraview/#../public/pdf/cartaoCNPJ.pdf') }}" width="1000px" height="600px"></iframe>
@endsection
