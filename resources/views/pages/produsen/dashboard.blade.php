@extends('layouts.master_layout_admin')

@section('content')
    <section>
        <h1 class="text-xl mt-2 mb-6 font-semibold">Dashboard Investor</h1>

        {{-- Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Total Investasi</p>
                <p class="text-2xl font-bold">Rp 1.200.000.000</p>
            </div>
            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Total Pendapatan</p>
                <p class="text-2xl font-bold">Rp 150.000.000</p>
            </div>
            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Jumlah Proyek Aktif</p>
                <p class="text-2xl font-bold">5 Proyek</p>
            </div>
            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Tingkat ROI (Return)</p>
                <p class="text-2xl font-bold">12%/tahun</p>
            </div>
        </div>

        {{-- Chart Pertumbuhan Investasi --}}
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-lg font-semibold mb-4">Pertumbuhan Investasi</h2>
            <div id="investmentChart"></div>
        </div>

        {{-- Tabel dan Pie Chart --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Tabel Riwayat --}}
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Riwayat Investasi</h2>
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr>
                            <th class="py-2">Proyek</th>
                            <th class="py-2">Tanggal Investasi</th>
                            <th class="py-2">Jumlah Investasi</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="py-2">Pabrik Kelapa Sawit Sumatera</td>
                            <td class="py-2">12 Jan 2025</td>
                            <td class="py-2">Rp 200.000.000</td>
                            <td class="py-2 text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-2">Tambang Nikel Sulawesi</td>
                            <td class="py-2">25 Feb 2025</td>
                            <td class="py-2">Rp 300.000.000</td>
                            <td class="py-2 text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-2">Pabrik Kopi Jawa Barat</td>
                            <td class="py-2">10 Mar 2025</td>
                            <td class="py-2">Rp 250.000.000</td>
                            <td class="py-2 text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-2">Startup Teknologi Jakarta</td>
                            <td class="py-2">20 Apr 2025</td>
                            <td class="py-2">Rp 250.000.000</td>
                            <td class="py-2 text-green-600">Aktif</td>
                        </tr>
                        <tr>
                            <td class="py-2">Perkebunan Teh Bandung</td>
                            <td class="py-2">5 Mei 2025</td>
                            <td class="py-2">Rp 200.000.000</td>
                            <td class="py-2 text-green-600">Aktif</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Pie Chart Distribusi Investasi --}}
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Distribusi Investasi</h2>
                <div id="distributionChart"></div>
            </div>
        </div>
    </section>

    {{-- Include ApexCharts --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Line Chart Pertumbuhan Investasi
        var investmentOptions = {
            chart: {
                type: 'line',
                height: 350
            },
            series: [{
                name: 'Total Investasi',
                data: [200000000, 400000000, 600000000, 800000000, 1000000000, 1200000000]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun']
            },
            colors: ['#4F46E5']
        }
        var investmentChart = new ApexCharts(document.querySelector("#investmentChart"), investmentOptions);
        investmentChart.render();

        // Pie Chart Distribusi Investasi
        var distributionOptions = {
            chart: {
                type: 'pie',
                height: 350
            },
            series: [16, 25, 20, 21, 18], // % pembagian investasi total
            labels: [
                'Pabrik Kelapa Sawit',
                'Tambang Nikel',
                'Pabrik Kopi',
                'Startup Teknologi',
                'Perkebunan Teh'
            ],
            colors: ['#6366F1', '#22D3EE', '#F97316', '#34D399', '#F59E0B']
        }
        var distributionChart = new ApexCharts(document.querySelector("#distributionChart"), distributionOptions);
        distributionChart.render();
    </script>
@endsection
