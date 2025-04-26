@extends('layouts.admin')

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
                                Nama Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Kebutuhan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kebutuhan_produsen as $kebutuhan)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $kebutuhan->produsen->nama_produsen }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $kebutuhan->nama_kebutuhan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $kebutuhan->jumlah_kebutuhan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $kebutuhan->status }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-2">
                                        <form
                                            action="{{ route('admin.verifikasi.statusKebutuhan-terima', $kebutuhan->id_kebutuhan_produsen) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="font-medium text-blue-600 border-2 border-blue-600 px-3 py-1.5 rounded-md hover:bg-blue-600 hover:text-white">
                                                <i class="ri-check-line text-xl"></i>
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.verifikasi.statusKebutuhan-tolak', $kebutuhan->id_kebutuhan_produsen) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="font-medium text-red-600 border-2 border-red-600 px-3 py-1.5 rounded-md hover:bg-red-600 hover:text-white">
                                                <i class="ri-close-line text-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
                                Nama Supplier
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $p)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $p->users->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->deskripsi_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->gambar_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->deskripsi_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->harga_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->status }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-2">
                                        <form
                                            action="{{ route('admin.verifikasi.statusProduk-terima', $p->id_produk) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="font-medium text-blue-600 border-2 border-blue-600 px-3 py-1.5 rounded-md hover:bg-blue-600 hover:text-white">
                                                <i class="ri-check-line text-xl"></i>
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.verifikasi.statusProduk-tolak', $p->id_produk) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="font-medium text-red-600 border-2 border-red-600 px-3 py-1.5 rounded-md hover:bg-red-600 hover:text-white">
                                                <i class="ri-close-line text-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
