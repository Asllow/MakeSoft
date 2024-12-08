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
    <script>
        document.addEventListener('livewire:init', function () {


            // Inicializa o gráfico
            function initializeChart(chartData, xAxisData) {
                let chart;
                chart = new ApexCharts(document.querySelector("#chart"), {
                    chart: {
                        type: 'line',
                        animations: {enabled: true},
                        zoom: {
                            enabled: false
                        }
                    },
                    series: [{
                        name: '{{ ucfirst($selector) }}',
                        data: chartData
                    }],
                    xaxis: {
                        categories: xAxisData
                    },
                });

                chart.render();
            }

            // Ouve o evento 'chart-updated' e atualiza o gráfico
            Livewire.on('chart-updated', ({chartData, xAxisData}) => {
                if (!chart) {
                    initializeChart(chartData, xAxisData);
                } else {
                    chart.updateSeries([{
                        data: chartData
                    }]);
                    chart.updateOptions({
                        xaxis: {
                            categories: xAxisData
                        }
                    })
                }
            });

            // Atualiza os dados periodicamente
            setInterval(() => {
            @this.refreshChart()
                ;
            }, 1000);
        });
    </script>
</main>

