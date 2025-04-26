@extends('layouts.master_layout_landing')
@section('content')
<section class="flex gap-x-20 gap-y-4 px-16 py-28 w-full">
    <div class="w-1/2">
        <img src="../img/bahan.jpg" alt="" class="w-full">
    </div>
    <div class="w-1/2">
        <p class="mt-4 text-lg text-gray-400">Kategori</p>
        <h1 class="text-3xl font-medium flex items-center">Kopi Arabica <span class="text-sm px-4 border border-green-800 bg-green-900/10 rounded-full ms-2">Alat Tulis</span></h1>
        <div class="flex items-center gap-1.5">
            <i class="ri-star-fill text-yellow-500"></i>
            <i class="ri-star-fill text-yellow-500"></i>
            <i class="ri-star-fill text-yellow-500"></i>
            <i class="ri-star-fill text-yellow-500"></i>
            <i class="ri-star-fill text-yellow-500"></i>
        </div>
        <p class="text-2xl font-semibold my-2">Rp 30.000</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil libero, cum quo fugiat incidunt exercitationem expedita accusantium culpa impedit saepe reiciendis, facere officia nulla non harum sint asperiores ab omnis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti cum expedita consectetur, laborum, illo assumenda totam doloremque inventore eaque, cumque id? Qui exercitationem laborum voluptatem quam consequuntur odit illo voluptates?</p>
        <p>Kuantitas</p>
        <div class="flex gap-4 mt-6 items-center">
            <p class="w-8 h-8 bg-green-900 flex items-center justify-center rounded-full text-white text-2xl">-</p>
            <p class="text-xl">1</p>
            <p class="w-8 h-8 bg-green-900 flex items-center justify-center rounded-full text-white text-2xl">+</p>
        </div>
        <button>Tambah</button>
    </div>
</section>
@endsection
