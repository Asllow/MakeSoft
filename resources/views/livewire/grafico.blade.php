<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script wire:poll.1s.keep-alive>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: '{{ $selector }}',
                    data: @json($datas),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>
</div>
