<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    @include('components.navbar')

    @include('components.sidebar')

    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>

    <!-- Load Chart.js CDN -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Pie Chart
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['User Terdaftar', 'Belum Verifikasi'],
                datasets: [{
                    label: 'Jumlah User',
                    data: [{{ $total_user }}, 90], // Sesuaikan dengan datamu
                    backgroundColor: ['#3B82F6', '#EF4444'],
                    hoverOffset: 4
                }]
            }
        });

        // Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Pendapatan (Rp)',
                    data: [15000, 25000, 50000, 35000, 89000], // Contoh data
                    backgroundColor: '#10B981'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script> --}}
</body>

</html>
