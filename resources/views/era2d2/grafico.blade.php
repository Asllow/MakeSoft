@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('main')
    <main id="main">
        <section class="section" id="head">
            <div class="container">
                <div class="head">
                    <a href="{{ route('era2d2.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                    <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
                </div>
                <div class="grafico">
                    @livewire('grafico')
                </div>
            </div>
        </section>
    </main>
@endsection
