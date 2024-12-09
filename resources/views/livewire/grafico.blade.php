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
                    <div wire:poll.1000ms="updateChartData"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('js')
    <script>
        document.addEventListener('livewire:init', function () {
            let chart;

            function initializeChart(chartData, xAxisData) {
                chart = new ApexCharts(document.querySelector("#chart"), {
                    chart: {
                        type: 'line',
                        animations: {enabled: true},
                        zoom: {
                            enabled: false
                        }
                    },
                    series: [{
                        name: '{{ $selector }}',
                        data: chartData
                    }],
                    xaxis: {
                        content: xAxisData
                    },
                });

                chart.render();
            }

            Livewire.on('chart-updated', (received) => {
                if (!chart) {
                    initializeChart(received.chartData, received.xAxisData);
                } else {
                    chart.updateSeries([{
                        data: received.chartData
                    }]);
                    chart.updateOptions({
                        xaxis: {
                            content: received.xAxisData
                        }
                    })
                }
            });
        });
    </script>
@endpush
