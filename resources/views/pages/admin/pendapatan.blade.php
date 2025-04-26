@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl mt-14 mb-6 font-bold">Pendapatan</h1>
    <div id="tabKebutuhan" class="p-4 bg-white shadow rounded-lg">


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
                        {{-- <th scope="col" class="px-6 py-3">
                            Sumber Pendapatan
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Pendapatan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $t)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $t->user->nama }}
                            </td>
                                {{-- <td class="px-6 py-4">
                                Penjualan Kayu Ulin
                            </td> --}}
                            <td class="px-6 py-4">
                                Rp. {{ number_format($t->potongan_admin, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
