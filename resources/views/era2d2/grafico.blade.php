@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('stylesheet')
    @livewireStyles
@endsection()

@section('main')
    {{ $slot }}
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @stack('js')
@endsection
