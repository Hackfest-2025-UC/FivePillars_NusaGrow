@extends('layouts.master_layout_landing')

@section('content')
<section class="grid grid-cols-4 gap-x-6 gap-y-4 px-16 py-16">
  @for ($i = 0; $i < 10; $i++)
    <div class="shadow p-5 rounded-2xl">
        <img src="../img/bahan.jpg" alt="asd" class="h-36 w-full object-cover rounded-lg">
        <h1 class="text-[20px] mt-4 text-lg font-semibold">Kopi Arabica</h1>
        <div class="flex items-center">
            <p class="text-gray-400"><i class="ri-map-pin-2-fill me-2"></i>Aceh |</p>
            <p class="text-gray-400 ms-2">CV Suka Makmur</p>
        </div>
        <div class="flex justify-between mt-2">
            <div>
                <p class="text-gray-600">Harga</p>
                <p class="text-xl font-semibold">Rp 2000</p>
            </div>
            <div>
                <p class="text-gray-600">Kuantitas</p>
                <p class="text-xl font-semibold">20kg</p>
            </div>
        </div>
        <a href="{{ route('products.detail') }}" class="px-4 py-2 flex mt-8 justify-center rounded-lg bg-gray-700 text-white"><i class="ri-share-box-line me-2"></i>Lihat Detail</a>
    </div>
  @endfor
</section>
@endsection
