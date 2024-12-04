@extends('makesoft.index')
@section('title')
    Makesoft - Pix
@endsection

@section('content')
    @if($product == null)
        <div class='container'>
            <div class='pix-item'>
                <img src='{{ $out }}' style="width: 20rem" alt='PIX'>
                <h5>PIX para Demais Encomendas</h5>
                <p style='width: 100%;'>{{ $pix }}</p>
            </div>
        </div
    @else
        <div class='container'>
            <div class='pix-item'>
                <img src='{{ $out }}' style="width: 20rem" alt='PIX'>
                <h5>R${{ $product->preco_produto }}</h5>
                <p style='width: 100%;'>{{ $pix }}</p>
            </div>
        </div
    @endif
@endsection
