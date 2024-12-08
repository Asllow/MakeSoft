<main id="main">
    <section class="section5" id="head">
        <div class="container grafico-container">
            <div class="head">
                <a href="{{ route('era.index'). '#' . $selector }}"><i class="bi bi-arrow-left-circle"></i></a>
                <h2 class="title subtitle">Gráfico de {{ ucfirst($selector) }}</h2>
            </div>
            <div class="cont-grad">
                <div class="grafico" wire:poll="fetchData">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('js')
    <script>
        document.addEventListener('livewire:load', () => {
            $wire.on('post-created', (chartData) => {
                chart.updateOptions({
                    xaxis: {
                        categories: chartData.base
                    },
                })
            })
        })
    </script>
@endpush
