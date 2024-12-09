<main id="main">
    <section class="section5" id="head">
        <div class="container grafico-container">
            <div class="head">
                <a href="{{ route('era.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
            </div>
            <div class="cont-grad">
                <div class="grafico">
                    {{ $chart_data }}
                    <div id="chart"></div>
                    <div wire:poll.3000ms="updateChartData"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('js')
    <script>
        document.addEventListener('livewire:init', function () {
            let chart;

            function initializeChart() {
                chart = new ApexCharts(document.querySelector("#chart"), {
                    chart: {
                        type: 'line',
                        id: 'mychart',
                        animations: {enabled: false},
                        zoom: {
                            enabled: false
                        }
                    },
                    series: [{
                        name: '{{ $selector }}',
                        data: @json('$chart_data')
                    }],
                    xaxis: {
                        categories: []
                    },
                });

                chart.render();
            }

            Livewire.on('chart-updated', () => {
                if (!chart) {
                    initializeChart();
                } else {
                    ApexCharts.exec('mychart', 'updateOptions', {
                        series: [{
                            data: [1, 2, 3, 4]
                        }],
                    }, false, true);

                    chart.render()
                }
            });
        });
    </script>
@endpush
