@extends('layouts.master_layout_landing')
@section('content')
    <section class="px-12">
        <div class="grid grid-cols-4 gap-4 p-4">
            @foreach ($investors as $investor)
                <div class="w-full bg-white shadow-lg rounded-lg px-4 py-4 overflow-hidden">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $investor->nama_investor }}</h2>
                            <p class="text-gray-600">{{ $investor->pekerjaan_investor }}</p>
                        </div>
                        <img src="{{ asset('image/image 3.png') }}" alt="Card Image" class="w-12 h-12 rounded-full object-cover ml-4">
                    </div>
                    <p class="text-gray-600 mt-4 text-md">{{ $investor->deskripsi_investor }}</p>
                    <div class="mt-1 flex justify-start">
                       <button class="w-full bg-green-900 py-2 rounded-lg text-white mt-2">Ajukan Tawaran</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
