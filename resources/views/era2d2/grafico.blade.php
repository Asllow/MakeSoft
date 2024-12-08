@extends('era2d2.header')

@section('title', "Gráfico de " . ucfirst($selector))

@section('description', 'Essa página mostra os últimos resultados de uma das nossas pesquisas associadas à medição')

@section('main')
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const options = {
            chart: {
                type: 'line'
            },
            series: [{
                name: '{{ ucfirst($selector) }}',
                data: @json($datas)
            }],
            xaxis: {
                categories: @json($labels)
            }
        };

        const chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
@endsection
