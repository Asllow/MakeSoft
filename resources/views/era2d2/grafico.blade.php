@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('stylesheet')
    <livewire:styles/>
@endsection()

@section('main')
    <main id="main">
        <section class="section" id="head">
            <div class="container grafico-container">
                <div class="head">
                    <a href="{{ route('era.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                    <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
                </div>
                <div class="cont-grad">
                    <div class="grafico">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </section>
    </main>
    <livewire:scripts/>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @stack('js')
@endsection
