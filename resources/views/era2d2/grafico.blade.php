@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('main')
    <main id="main">
        <section class="section" id="home">
            <div class="container">
                <h1 class="title">Gráfico de {{ ucfirst($selector) }}</h1>
            </div>
        </section>
    </main>
@endsection
