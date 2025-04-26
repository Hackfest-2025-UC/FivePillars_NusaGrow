@extends('layouts.admin')

@section('content')
<section class="py-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Dashboard</h2>
    <!-- Cards Info -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card User -->
        <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
            <p class="text-sm">Total User Terdaftar</p>
            <p class="text-2xl font-bold">{{ $total_user }}</p>
        </div>

        <!-- Card Pendapatan -->
        <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
            <p class="text-sm">Total Pendapatan</p>
            <p class="text-2xl font-bold">Rp. {{ number_format($total_pendapatan, 0, ',', '.') }}</p>
        </div>

        <!-- Card Verifikasi -->
        <div class="w-full h-28 bg-gray-800 text-white rounded-lg flex flex-col justify-center px-6">
            <p class="text-sm">Perlu Diverifikasi</p>
            <p class="text-2xl font-bold">{{ $total_perlu_diverifikasi }}</p>
        </div>
    </div>

    <p class="text-2xl font-semibold my-2 text-center mt-8">Grafik Pendapatan</p>
    <div id="chart"></div>

<script>
    var options = {
  chart: {
    type: 'line'
  },
  series: [{
    name: 'sales',
    data: [30,40,35,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();
</script>
@endsection
