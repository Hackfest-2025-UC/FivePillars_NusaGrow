@extends('layouts.admin')

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Dashboard</h2>

    <!-- Card Welcome -->
    <div class="bg-white p-6 rounded-xl shadow-lg text-white mb-10">
        <div class="flex items-center">
            <div class="text-5xl mr-4">
                👋
            </div>
            <div>
                <h1 class="text-2xl font-bold mb-1 text-blue-600">Halo, Admin!</h1>
                <p class="text-md text-blue-600">Semangat mengelola data hari ini! 🚀</p>
            </div>
            <div class="ml-auto">
                <img src="{{ asset('image/undraw_creative-flow_t3kz.png') }}" alt="Creative Flow" width="200" class="ml-4">
            </div>
        </div>
    </div>

    <!-- Cards Info -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card User -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
            <div class="flex items-center justify-between">
                <i class="ri-user-line text-5xl text-blue-700"></i>
                <h1 class="text-4xl font-bold text-blue-700">12</h1>
            </div>
            <p class="font-semibold text-blue-700 mt-4">Total User Terdaftar</p>
        </div>

        <!-- Card Pendapatan -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
            <div class="flex items-center justify-between">
                <i class="ri-money-dollar-circle-line text-5xl text-green-600"></i>
                <h1 class="text-4xl font-bold text-green-600">Rp 89.000</h1>
            </div>
            <p class="font-semibold text-green-600 mt-4">Total Pendapatan</p>
        </div>

        <!-- Card Verifikasi -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
            <div class="flex items-center justify-between">
                <i class="ri-user-unfollow-line text-5xl text-red-500"></i>
                <h1 class="text-4xl font-bold text-red-500">90</h1>
            </div>
            <p class="font-semibold text-red-500 mt-4">Perlu Diverifikasi</p>
        </div>
    </div>
@endsection
