@extends('layouts.produsen')
@section('content')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Tawaran
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Tawaran
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($penawarans as $penawaran)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{  $penawaran->produk->nama_produk }}
                </th>
                <td class="px-6 py-4">
                    {{  $penawaran->produk->harga }}
                </td>
                <td class="px-6 py-4">
                    {{  $penawaran->harga_penawaran }}
                </td>
                <td class="px-6 py-4">
                    {{  $penawaran->deskripsi_penawaran }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
