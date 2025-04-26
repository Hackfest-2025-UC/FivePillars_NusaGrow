@extends('layouts.template')

@section('content')
    <h1 class="text-3xl mt-14 mb-6 font-bold">Verifikasi</h1>

    <!-- Tabs -->
    <div>
        <div class="flex space-x-4 border-b-2 border-gray-200 mb-4">
            <button id="tabKebutuhanBtn" onclick="showTab('kebutuhan')"
                class="py-2 px-4 text-blue-600 font-semibold border-b-4 border-blue-600 focus:outline-none">
                Kebutuhan
            </button>
            <button id="tabProdukBtn" onclick="showTab('produk')"
                class="py-2 px-4 text-gray-600 hover:text-blue-600 focus:outline-none">
                Produk
            </button>
        </div>

        <!-- Tab Content -->
        <div id="tabKebutuhan" class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl font-bold mb-2">Daftar Kebutuhan</h2>


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1.
                            </th>
                            <td class="px-6 py-4">
                                Farhan
                            </td>
                            <td class="px-6 py-4">
                                Upylon
                            </td>
                            <td class="px-6 py-4">
                                Jalan sini
                            </td>
                            <td class="px-6 py-4">
                                10
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <a href="#"
                                        class="font-medium text-blue-600 border-2 border-blue-600 px-3 py-1.5 rounded-md hover:bg-blue-600 hover:text-white">
                                        <i class="ri-check-line text-xl"></i>
                                    </a>
                                    <a href="#"
                                        class="font-medium text-red-600 border-2 border-red-600 px-3 py-1.5 rounded-md hover:bg-red-600 hover:text-white">
                                        <i class="ri-close-line text-xl"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="tabProduk" class="p-4 bg-white shadow rounded-lg hidden">
            <h2 class="text-xl font-bold mb-2">Daftar Produk</h2>


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1.
                            </th>
                            <td class="px-6 py-4">
                                Farhan
                            </td>
                            <td class="px-6 py-4">
                                Upylon
                            </td>
                            <td class="px-6 py-4">
                                Jalan sini
                            </td>
                            <td class="px-6 py-4">
                                10
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <a href="#"
                                        class="font-medium text-blue-600 border-2 border-blue-600 px-3 py-1.5 rounded-md hover:bg-blue-600 hover:text-white">
                                        <i class="ri-check-line text-xl"></i>
                                    </a>
                                    <a href="#"
                                        class="font-medium text-red-600 border-2 border-red-600 px-3 py-1.5 rounded-md hover:bg-red-600 hover:text-white">
                                        <i class="ri-close-line text-xl"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function showTab(tab) {
            const kebutuhan = document.getElementById('tabKebutuhan');
            const produk = document.getElementById('tabProduk');

            const btnKebutuhan = document.getElementById('tabKebutuhanBtn');
            const btnProduk = document.getElementById('tabProdukBtn');

            if (tab === 'kebutuhan') {
                kebutuhan.classList.remove('hidden');
                produk.classList.add('hidden');

                btnKebutuhan.classList.add('text-blue-600', 'border-b-4', 'border-blue-600');
                btnKebutuhan.classList.remove('text-gray-600');

                btnProduk.classList.remove('text-blue-600', 'border-b-4', 'border-blue-600');
                btnProduk.classList.add('text-gray-600');
            } else {
                kebutuhan.classList.add('hidden');
                produk.classList.remove('hidden');

                btnProduk.classList.add('text-blue-600', 'border-b-4', 'border-blue-600');
                btnProduk.classList.remove('text-gray-600');

                btnKebutuhan.classList.remove('text-blue-600', 'border-b-4', 'border-blue-600');
                btnKebutuhan.classList.add('text-gray-600');
            }
        }
    </script>
@endsection
