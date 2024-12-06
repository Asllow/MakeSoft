<main id="main">
    <section class="section" id="head">
        <div class="container grafico-container">
            <div class="head">
                <a href="{{ route('era.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
            </div>
            <div class="cont-grad">
                <div class="grafico">
                    {{ $slot }}
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </section>
</main>
<livewire:scripts/>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
