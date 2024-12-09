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
                    <div wire:poll.3000ms="updateChartData"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts">
        document.addEventListener('livewire:init', function () {
            let chart;

            function initializeChart() {
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
                        data: {{ $chart_data }}
                    }],
                    xaxis: {
                        categories: {{ $chart_label }}
                    },
                });

                chart.render();
            }

            Livewire.on('chart-updated', () => {
                if (!chart) {
                    initializeChart();
                } else {
                    chart.updateSeries([{
                        data: {{ $chart_data }}
                    }])
                }
            });
        });
    </script>
@endpush
