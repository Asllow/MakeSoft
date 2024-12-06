<div wire:poll.1s.keep-alive>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [{{ $label4 }}, {{ $label3 }}, {{ $label2 }}, {{ $label1 }}, {{ $label }}],
                datasets: [{
                    label: '{{ $selector }}',
                    data: [{{ $data4 }}, {{ $data3 }}, {{ $data2 }}, {{ $data1 }}, {{ $data }}],
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
