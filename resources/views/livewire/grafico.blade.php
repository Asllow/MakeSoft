<main id="main">
    <section class="section" id="head">
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
        var options = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
@endpush
