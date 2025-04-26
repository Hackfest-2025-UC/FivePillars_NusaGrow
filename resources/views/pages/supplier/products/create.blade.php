@extends('layouts.master_layout_admin')
@section('content')
    @pushOnce('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @endPushOnce

    <h1 class="text-2xl font-semibold">Tambah Produk</h1>

    <form action="#" method="POST" enctype="multipart/form-data"
        class="flex flex-col items-center justify-center w-full mt-5 gap-5">
        @csrf
        <label for="dropzone-file"
            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-800"
            id="dropzone">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                </svg>
                <p class="mb-2 text-sm text-white"><span class="font-semibold">Click to upload</span>
                    or drag and drop</p>
                <p class="text-xs text-white">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input id="dropzone-file" name="file" type="file" class="hidden" />
        </label>

        <div class="flex justify-around w-full items-center gap-5">
            <div class="w-full">
                <label for="first_name" class="block mb-2 font-medium text-gray-900">Nama Produk</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                    placeholder="John" required />
            </div>
            <div class="w-full">
                <label for="first_name" class="block mb-2 font-medium text-gray-900">Kategori Produk</label>
                <select
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div class="w-full">
                <label for="harga" class="block mb-2 font-medium text-gray-900">Harga
                    Produk</label>
                <input type="number" id="harga"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                    placeholder="1000000" required />
            </div>
        </div>
        <div class="w-full flex items-start gap-5">
            <div class="w-1/3">
                <label class="block mb-2 font-medium text-gray-900">Deskripsi Produk</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>
            </div>
            <div class="w-2/3">
                <div id="map" class="w-full h-96"></div>
                <div class="w-full mt-5">
                    <div class="flex justify-around w-full items-center gap-5">
                        <div class="w-full">
                            <label for="latitude" class="block mb-2 font-medium text-gray-900">Latitude</label>
                            <input type="number" id="inpLatitude"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="-6.123456" required />
                        </div>
                        <div class="w-full">
                            <label for="longitude" class="block mb-2 font-medium text-gray-900">Longitude</label>
                            <input type="number" id="inpLongitude"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="106.123456" required />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @pushonce('scripts')
        <script>
            const dropzone = document.getElementById('dropzone');
            const fileInput = document.getElementById('dropzone-file');

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                }, false);
            });

            ['dragenter', 'dragover'].forEach(eventName => {
                dropzone.addEventListener(eventName, () => {
                    dropzone.classList.add('border-blue-500');
                }, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, () => {
                    dropzone.classList.remove('border-blue-500');
                }, false);
            });

            dropzone.addEventListener('drop', (e) => {
                if (e.dataTransfer.files.length) {
                    fileInput.files = e.dataTransfer.files;
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        dropzone.style.backgroundImage = `url(${e.target.result})`;
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            });

            dropzone.addEventListener('click', () => {
                fileInput.addEventListener('change', () => {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        dropzone.style.backgroundImage = `url(${e.target.result})`;
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                });
            });
        </script>
        <script>
            var map = L.map('map').setView([-8.184486, 113.668076], 12); // Jakarta

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Variabel untuk menyimpan marker terakhir
            var lastMarker = null;

            map.on('click', function(e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;
                $("#inpLatitude").val(lat);
                $("#inpLongitude").val(lng);

                // Hapus marker sebelumnya jika ada
                if (lastMarker) {
                    map.removeLayer(lastMarker);
                }

                // Tambahkan marker baru dan simpan ke variabel lastMarker
                lastMarker = L.marker([lat, lng]).addTo(map)
                    .bindPopup("Latitude: " + lat + "<br>Longitude: " + lng).openPopup();
            });
        </script>
    @endpushonce
@endsection
