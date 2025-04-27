@extends('layouts.master_layout_admin')
@section('content')
    <section class="">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Dashboard</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Total Produk</p>
                <p class="text-2xl font-bold">{{ $totalProduk }}</p>
            </div>

            <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
                <p class="text-sm">Total Permintaan</p>
                <p class="text-2xl font-bold">{{ $totalPermintaan }}</p>
            </div>
        </div>

        <p class="text-2xl font-semibold my-2 text-center mt-8">Grafik Pendapatan</p>
        <div id="chart"></div>
    </section>

    @pushOnce('scripts')
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
                    categories: [2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019]
                }
            }

            var chart = new ApexCharts(document.querySelector("#chart"), options);

            chart.render();
        </script>
    @endPushOnce
@endsection
