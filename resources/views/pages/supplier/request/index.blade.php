@extends('layouts.master_layout_admin')
@section('content')
    <h1 class="text-2xl font-semibold">Permintaan Masuk</h1>

    @foreach ($permintaans as $permintaan)
        <div class="flex flex-col gap-5 mt-5">
            <div class="flex justify-between items-start">
                <div class="flex">
                    <img src="{{ asset('storage/produsen/produsen1.jpg') }}" alt="profile"
                        class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">{{ $permintaan->kebutuhan_produsen->produsen->nama_produsen }}</p>
                        <p>{{ $permintaan->kebutuhan_produsen->produsen->alamat_produsen }}</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-5">
                    <span
                        class="inline-block {{ $permintaan->status_permintaan == 'proses' ? 'bg-yellow-100 text-yellow-800' : ($permintaan->status_permintaan == 'diterima' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }} text-xs px-2 py-1 rounded-full">{{ $permintaan->status_permintaan }}</span>
                    <p class="text-sm text-gray-600">{{ $permintaan->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="bg-gray-100 p-3 rounded-2xl">
                <div class="flex">
                    <img src="{{ url('storage/supplier/' . $permintaan->produk->gambar_produk) }}" alt="gambar"
                        class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">{{ $permintaan->produk->nama_produk }}</p>
                        <p class="text-xs">Harga Penawaran : {{ $permintaan->harga_penawaran }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <p>{{ $permintaan->deskripsi_penawaran }}</p>
            </div>

            <div class="flex justify-start gap-3">
                <button id="openModalBtn-{{ $loop->index }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 flex items-center gap-1">
                    <i class="ri-question-answer-line"></i> Balas Pesan
                </button>
                <button
                    class="border border-green-500 text-green-500 px-4 py-2 rounded-lg hover:border-green-600 flex items-center gap-1 cursor-pointer">
                    <i class="ri-check-line" class="w-4 h-4"></i>
                    Terima
                </button>
                <button
                    class="border border-red-500 text-red-500 px-4 py-2 rounded-lg hover:border-red-600 flex items-center gap-1 cursor-pointer">
                    <i class="ri-close-line" class="w-4 h-4"></i>
                    Tolak
                </button>
            </div>
        </div>
        <hr class="border-gray-300 my-3">

        <!-- Modal -->
        <div id="default-modal-balas-{{ $loop->index }}"
            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/30">
            <div class="relative bg-white rounded-2xl shadow-lg p-6 w-full max-w-md">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Balas Permintaan</h3>
                        <p class="text-xs">Kirim balasan pada produsen.</p>
                    </div>
                    <button id="closeModalBtn-{{ $loop->index }}" type="button"
                        class="text-gray-400 hover:text-gray-900">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <!-- Modal Body -->
                <form class="space-y-4" action="{{ route('suplier.request.store') }}" method="POST">
                    @csrf
                    <div class="flex">
                        <img src="{{ asset('storage/produsen/produsen1.jpg') }}" alt="profile"
                            class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <p class="font-semibold">{{ $permintaan->kebutuhan_produsen->produsen->nama_produsen }}</p>
                            <p>{{ $permintaan->kebutuhan_produsen->produsen->alamat_produsen }}</p>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-2xl py-2 px-3">
                        <p class="text-xs">Nama Bahan : <span
                                class="font-normal">{{ $permintaan->produk->nama_produk }}</span>
                        </p>
                        <p class="text-xs">Harga yang ditawarkan : <span
                                class="font-normal">{{ $permintaan->harga_penawaran }}</span></p>
                        <p class="mt-3">{{ $permintaan->deskripsi_penawaran }}</p>
                        @if ($permintaan->balasan_penawaran)
                            <p class="mt-3 text-sm font-semibold">Balasan : </p>
                            <p class="text-sm">{{ $permintaan->balasan_penawaran }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Pesan</label>
                        <textarea id="message" rows="4" name="balasan"
                            class="block w-full p-2.5 text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300"
                            placeholder="Masukkan pesan disini..."></textarea>
                        <input type="hidden" name="id_permintaan" value="{{ $permintaan->id_permintaans }}">
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
    @endforeach

    @pushOnce('scripts')
        <script>
            @foreach ($permintaans as $loopIndex => $permintaan)
                const openModalBtn{{ $loopIndex }} = document.getElementById('openModalBtn-{{ $loopIndex }}');
                const closeModalBtn{{ $loopIndex }} = document.getElementById('closeModalBtn-{{ $loopIndex }}');
                const modal{{ $loopIndex }} = document.getElementById('default-modal-balas-{{ $loopIndex }}');

                openModalBtn{{ $loopIndex }}.addEventListener('click', () => {
                    modal{{ $loopIndex }}.classList.remove('hidden');
                });

                closeModalBtn{{ $loopIndex }}.addEventListener('click', () => {
                    modal{{ $loopIndex }}.classList.add('hidden');
                });

                // Optional: Klik luar modal juga nutup
                window.addEventListener('click', (e) => {
                    if (e.target == modal{{ $loopIndex }}) {
                        modal{{ $loopIndex }}.classList.add('hidden');
                    }
                });
            @endforeach
        </script>
    @endPushOnce
@endsection
