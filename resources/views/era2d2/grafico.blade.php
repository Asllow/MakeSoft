@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('stylesheet')
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/apexcharts@4.1.0/dist/apexcharts.min.css" rel="stylesheet">
@endsection()

@section('main')
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@4.1.0/dist/apexcharts.min.js"></script>
    @livewireScripts
    @stack('js')
@endsection
