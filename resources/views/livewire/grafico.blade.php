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
    <script>
        document.addEventListener('livewire:init', function () {
            let chart;

            function initializeChart(teste) {
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
                        data: teste[0]
                    }],
                    xaxis: {
                        categories: teste[1]
                    },
                });

                chart.render();
            }

            Livewire.on('chart-updated', (teste) => {
                if (!chart) {
                    initializeChart(teste);
                } else {
                    console.log(teste)
                    ApexCharts.exec('mychart', 'updateOptions', {
                        series: [{
                            data: teste[0]
                        }],
                        xaxis: {
                            categories: teste[1]
                        },
                    }, false, true);

                    chart.render()
                }
            });
        });
    </script>
@endpush
