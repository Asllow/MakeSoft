@extends('makesoft.index')
@section('title')
    Makesoft - Catálogo
@endsection

@section('content')
    @if($product->count() > 0)
        @foreach($product as $rs)
            <div class='col-lg-3 col-md-6 col-xs-3 top15px'>
                <div class='card'>
                    <img src='{{ $rs->img_produto }}' class='card-img-top\' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title corTitulo'>{{ $rs->nome_produto }}</h5>
                        <p class='fs-6 fw-light'>{{ $rs->dimensao_produto }}</p>
                        <h5>{{ $rs->preco_produto }} $</h5>
                        <i class='fa-solid fa-droplet colorWhite'></i>
                        <i class='fa-solid fa-droplet colorBlack'></i>
                        <i class='fa-solid fa-droplet colorGray'></i>
                        <i class='fa-solid fa-droplet colorBrown'></i>
                        <i class='fa-solid fa-droplet colorRed'></i>
                        <i class='fa-solid fa-droplet colorOrange'></i>
                        <i class='fa-solid fa-droplet colorYellow'></i>
                        <i class='fa-solid fa-droplet colorGreen'></i>
                        <i class='fa-solid fa-droplet colorBluyTiffany'></i>
                        <i class='fa-solid fa-droplet colorBlue'></i>
                        <i class='fa-solid fa-droplet colorPurple'></i>
                        <i class='fa-solid fa-droplet colorPink'></i>
                        <hr>
                        <a style='width:100%;' href='{{ route('makesoft.pix', $rs->id_produto) }}'
                           class='btn btn-outline-dark'>
                            <i class='fa-solid fa-qrcode'></i> QR code
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
