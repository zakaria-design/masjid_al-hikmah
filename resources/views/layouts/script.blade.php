<script data-navigate-once src="{{ asset('adminlte3/plugins/jquery/jquery.min.js') }}"></script>
<script data-navigate-once src="{{ asset('adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script data-navigate-once src="{{ asset('adminlte3/dist/js/adminlte.min.js') }}"></script>

{{-- sweet alert 2 --}}
<script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js Script -->
<script>
    // Diagram Garis
    const ctxLine = document.getElementById('lineChart');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt'],
            datasets: [{
                label: 'Uang Kas',
                data: [12, 19, 3, 5, 2, 8],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Diagram Lingkaran
    const ctxPie = document.getElementById('pieChart');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Konsumtif', 'Operasional', 'Peralatan'],
            datasets: [{
                data: [30, 45, 25],
                backgroundColor: ['#007bff', '#28a745', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>




