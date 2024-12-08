<main id="main">
    <section class="section5" id="head">
        <div class="container grafico-container">
            <div class="head">
                <a href="{{ route('era.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
            </div>
            <div class="cont-grad">
                <div class="grafico">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('js')
    <script>
        const options = {
            chart: {
                type: 'line',
                zoom: {
                    enabled: false
                }
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
@endpush
