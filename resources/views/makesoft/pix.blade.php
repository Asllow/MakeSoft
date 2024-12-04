@extends('makesoft.index')
@section('title')
    Makesoft - Pix
@endsection

@section('content')
    <div class='container'>
        <div class='pix-item'>
            <h5>R${{ $product->preco_produto }}</h5>
            <p style='width: 100%;'>{{ $pix }}</p>
        </div>
    </div
@endsection
