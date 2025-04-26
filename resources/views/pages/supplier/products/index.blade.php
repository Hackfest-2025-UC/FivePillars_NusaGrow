@extends('layouts.master_layout_admin')
@section('content')
    <h1 class="text-2xl font-semibold">Daftar Produk Saya</h1>
    <div class="flex justify-between items-center mt-8">
        <form action="#" method="GET" class="">
            <input type="text" name="query" placeholder="Search products..."
                class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none">
        </form>
        <a href="{{ route('products.create') }}"
            class="px-4 py-2 flex justify-center gap-3 rounded-lg bg-gray-700 text-white"><i class="ri-add-line"></i>Tambah
            Produk</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="supplierTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                        <span class="sr-only">Hapus</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center gap-3">
                            <img src="{{ url('storage/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}"
                                class="size-12 rounded-full mr-2">
                            {{ $produk->nama_produk }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $produk->deskripsi_produk }}
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $produk->kategori_produk }}</span>
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp ' . number_format($produk->harga_produk, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-center items-center gap-3">
                                <a href="{{ route('products.edit', $produk->id_produk) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
