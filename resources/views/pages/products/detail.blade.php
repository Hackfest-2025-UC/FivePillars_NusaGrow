@extends('layouts.master_layout_landing')
@section('content')
<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>

    <input type="hidden" id="id_produk" value="{{ $produk->id_produk }}">
    <section class="flex gap-x-20 gap-y-4 px-16 py-28 w-full">
        <div class="w-1/2">
            <img src="/img/bahan.jpg" alt="" class="w-full">
        </div>
        <div class="w-1/2">
            <p class="mt-4 text-lg text-gray-400">Kategori</p>
            <h1 class="text-3xl font-medium flex items-center">{{  $produk->nama_produk }} <span
                    class="text-sm px-4 border border-green-800 bg-green-900/10 rounded-full ms-2">Alat Tulis</span></h1>
            <div class="flex items-center gap-1.5">
                <i class="ri-star-fill text-yellow-500"></i>
                <i class="ri-star-fill text-yellow-500"></i>
                <i class="ri-star-fill text-yellow-500"></i>
                <i class="ri-star-fill text-yellow-500"></i>
                <i class="ri-star-fill text-yellow-500"></i>
            </div>
            <p class="text-2xl font-semibold my-2">Rp {{ $produk->harga_produk }}</p>
            <p>{{ $produk->deskripsi_produk }}</p>
            <p>Kuantitas</p>
            <div class="flex gap-4 mt-6 items-center">
                <p id="btnMinus" class="w-8 h-8 bg-green-900 flex items-center justify-center rounded-full text-white text-2xl cursor-pointer">-</p>
                <input type="number" id="kuantitas" value="1" min="1" class="w-16 text-center border border-gray-300 rounded-md py-1">
                <p id="btnPlus" class="w-8 h-8 bg-green-900 flex items-center justify-center rounded-full text-white text-2xl cursor-pointer">+</p>
                <button
                class="bg-yellow-500 hover:bg-yellow-600 transition-all text-white py-2 px-4 rounded-full flex items-center gap-2">
                <i class="ri-phone-line"></i>
                Hubungi Suplyer
            </button>
            <button
            id="btnBayar"
                class="bg-red-500 hover:bg-red-600 transition-all text-white py-2 px-4 rounded-full flex items-center gap-2">
                <i class="ri-wallet-3-line"></i>
                Bayar Sekarang
            </button>
            </div>
             
            </div>
        </div>
    </section>
    <hr class="border-t border-gray-200" />
    <p class="text-2xl font-semibold my-2 text-center mt-8">Testimoni</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-16 px-18">
        <div class="flex flex-col p-4 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-400">20 Oktober 2022</p>
                <i class="ri-quote-line text-2xl"></i>
            </div>
            <p class="mt-4 text-lg text-gray-600 italic">"Saya sangat puas dengan produk dari NusaGrow. Kualitasnya sangat bagus
                dan harganya terjangkau."</p>
            <p class="mt-4 text-lg font-semibold">- Rizky</p>
        </div>
        <div class="flex flex-col p-4 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-400">20 Oktober 2022</p>
                <i class="ri-quote-line text-2xl"></i>
            </div>
            <p class="mt-4 text-lg text-gray-600 italic">"Saya sangat puas dengan produk dari NusaGrow. Kualitasnya sangat bagus
                dan harganya terjangkau."</p>
            <p class="mt-4 text-lg font-semibold">- Rizky</p>
        </div>
        <div class="flex flex-col p-4 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-400 italic">20 Oktober 2022</p>
                <i class="ri-quote-line text-2xl"></i>
            </div>
            <p class="mt-4 text-lg text-gray-600">"Saya sangat puas dengan produk dari NusaGrow. Kualitasnya sangat bagus
                dan harganya terjangkau."</p>
            <p class="mt-4 text-lg font-semibold">- Rizky</p>
        </div>
    </div>

    @section('content')
    <!-- (kode HTML kamu yang sudah ada) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnMinus = document.getElementById('btnMinus');
        const btnPlus = document.getElementById('btnPlus');
        const kuantitasInput = document.getElementById('kuantitas');

        btnPlus.addEventListener('click', function() {
            let jumlah = parseInt(kuantitasInput.value) || 1;
            jumlah++;
            kuantitasInput.value = jumlah;
        });

        btnMinus.addEventListener('click', function() {
            let jumlah = parseInt(kuantitasInput.value) || 1;
            if (jumlah > 1) {
                jumlah--;
                kuantitasInput.value = jumlah;
            }
        });

        // Cek manual kalau user ketik sembarangan
        kuantitasInput.addEventListener('input', function() {
            let jumlah = parseInt(kuantitasInput.value);
            if (isNaN(jumlah) || jumlah < 1) {
                kuantitasInput.value = 1;
            }
        });
    });

    $(document).ready(function() {
        $('#btnBayar').click(function() {
            const data = {
                _token: "{{ csrf_token() }}",
                id: 1,
                id_produk: $('#id_produk').val(),
                jumlah: $('#kuantitas').val()
            }
            var token = "";
            $.ajax({
                url: "/get-token",
                method: "post",
                data: data,
                success(res) {
                    token = res;
                    window.snap.pay(token, {
                        onSuccess: function(result) {
                            /* You may add your own implementation here */
                            $.ajax({
                                url: "/api/callback",
                                method: "post",
                                data: result,
                                success(res) {
                                    window.location.assign(
                                        `http://127.0.0.1:8000/`
                                    );
                                },
                                error(err) {

                                }
                            });


                        },
                        onPending: function(result) {
                            /* You may add your own implementation here */
                            alert("wating your payment!");

                        },
                        onError: function(result) {
                            /* You may add your own implementation here */
                            alert("payment failed!");

                        },
                        onClose: function() {
                            /* You may add your own implementation here */
                            alert(
                                'you closed the popup without finishing the payment'
                            );
                        }
                    })
                },
                error(err) {

                }
            });
        });
    });


</script>
@endsection
