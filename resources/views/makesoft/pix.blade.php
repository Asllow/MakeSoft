@extends('makesoft.index')
@section('title')
    Makesoft - Pix
@endsection

@section('content')
    <div class='container'>
        <div class='pix-item'>
            <img src='{{ $out }}' alt='PIX'>
        </div>
    </div
@endsection
