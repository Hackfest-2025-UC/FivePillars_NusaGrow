@extends('layouts.master_layout_admin')
@section('content')
    <h1 class="text-2xl font-semibold">Permintaan Masuk</h1>
    <div class="flex flex-col gap-5 mt-5">
        <div class="flex justify-between items-start">
            <div class="flex">
                <img src="{{ asset('storage/produsen/produsen1.jpg') }}" alt="profile" class="w-12 h-12 rounded-full mr-3">
                <div>
                    <p class="font-semibold">Nama Produsen</p>
                    <p>Alamat Produsen</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-5">
                <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Active</span>
                <p class="text-sm text-gray-600">15 Januari 2023</p>
            </div>
        </div>
        <div class="bg-gray-100 p-3 rounded-2xl">
            <div class="flex">
                <img src="{{ asset('storage/produsen/produsen1.jpg') }}" alt="profile" class="w-12 h-12 rounded-full mr-3">
                <div>
                    <p class="font-semibold">Nama Bahan</p>
                    <p class="text-xs">Jumlah yang dibutuhkan : 10kg</p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <p>Pesan dari produsen</p>
        </div>

        <div class="flex justify-start gap-3">
            <button id="openModalBtn"
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

    <!-- Modal -->
    <div id="default-modal-balas" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/30">
        <div class="relative bg-white rounded-2xl shadow-lg p-6 w-full max-w-md">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">Balas Permintaan</h3>
                    <p class="text-xs">Kirim balasan pada produsen.</p>
                </div>
                <button id="closeModalBtn" type="button" class="text-gray-400 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <form class="space-y-4">
                <div class="flex">
                    <img src="{{ asset('storage/produsen/produsen1.jpg') }}" alt="profile"
                        class="w-12 h-12 rounded-full mr-3">
                    <div>
                        <p class="font-semibold">Nama Produsen</p>
                        <p>Alamat Produsen</p>
                    </div>
                </div>
                <div class="bg-gray-200 rounded-2xl py-2 px-3">
                    <p class="text-xs">Nama Bahan : <span class="font-normal">Gula Pasir</span></p>
                    <p class="text-xs">Jumlah yang dibutuhkan : <span class="font-normal">10kg</span></p>
                    <p class="mt-3">"Halo Pak Budi, saya tertarik dengan Kopi Arabika Gayo Anda. Apakah
                        masih tersedia 100kg untuk bulan depan? Kami ingin menggunakannya untuk produksi kopi kemasan
                        premium kami."</p>
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Pesan</label>
                    <textarea id="message" rows="4"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300"
                        placeholder="Masukkan pesan disini..."></textarea>
                </div>
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Kirim
                </button>
            </form>
        </div>
    </div>

    @pushOnce('scripts')
        <script>
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const modal = document.getElementById('default-modal-balas');

            openModalBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            // Optional: Klik luar modal juga nutup
            window.addEventListener('click', (e) => {
                if (e.target == modal) {
                    modal.classList.add('hidden');
                }
            });
        </script>
    @endPushOnce
@endsection
