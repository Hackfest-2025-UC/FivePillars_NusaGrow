<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nusa Grow</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <nav class="flex justify-between px-8 sm:px-16 items-center py-3 fixed top-0 left-0 w-full bg-white z-50">
        <img class="w-64" src="{{ asset('image/icon.png') }}" alt="Logo">

        <div class="lg:hidden">
            <!-- Hamburger Menu Icon for Mobile -->
            <button id="menu-toggle" class="text-3xl text-[#28CB8B]">
                <i class="ri-menu-3-line"></i>
            </button>
        </div>

        <ul class="flex gap-10 lg:flex hidden">
            <li><a href="" class="hover:text-[#28CB8B]">Home</a></li>
            <li><a href="" class="hover:text-[#28CB8B]">Tentang Kami</a></li>
            <li><a href="" class="hover:text-[#28CB8B]">Layanan</a></li>
            <li><a href="" class="hover:text-[#28CB8B]">Testimoni</a></li>
            <li><a href="" class="hover:text-[#28CB8B]">Hubungi Kami</a></li>
        </ul>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="lg:hidden absolute left-0 top-0 w-full bg-white py-5 px-8 space-y-5 hidden">
            <li><a href="" class="block text-lg hover:text-[#28CB8B]">Home</a></li>
            <li><a href="" class="block text-lg hover:text-[#28CB8B]">Tentang Kami</a></li>
            <li><a href="" class="block text-lg hover:text-[#28CB8B]">Layanan</a></li>
            <li><a href="" class="block text-lg hover:text-[#28CB8B]">Testimoni</a></li>
            <li><a href="" class="block text-lg hover:text-[#28CB8B]">Hubungi Kami</a></li>
        </ul>
    </nav>

    <div class="flex flex-col lg:flex-row items-center justify-between px-8 sm:px-16 py-16 mt-20">
        <div class="text-center lg:text-left">
            <h1 class="text-3xl sm:text-5xl font-bold leading-tight" data-aos="fade-right">Membangun Konektivitas, Mendorong Pertumbuhan
                Ekonomi Nusantara</h1>
            <p class="mt-4 text-lg sm:text-xl" data-aos="fade-right">Kami menghubungkan supplier bahan mentah dengan produsen secara efektif
                dan berkelanjutan.</p>
            <a class="bg-[#28CB8B] hover:bg-green-600 mt-6 transition-all text-white py-2 px-6 rounded-md inline-block items-center gap-2"
                href="" data-aos="fade-right">Gabung Sekarang</a>
        </div>

        <img class="w-full sm:w-1/2 mt-8 lg:mt-0" src="{{ asset('image/hero.png') }}" alt="Hero Image" data-aos="fade-left">
    </div>

    <div class="max-w-screen-xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8" data-aos="fade-up">Peta Sebaran Nusa Grow</h1>

        <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white opacity-50 rounded-lg"></div>
            <div id="map" class="h-[500px] w-full rounded-lg shadow-lg" data-aos="fade-up"></div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 sm:px-8 py-16 flex flex-col md:flex-row items-center gap-8">
        <img class="w-full md:w-1/2 rounded-lg shadow-lg" src="{{ asset('image/image 3.png') }}" alt="" data-aos="fade-right">

        <div class="w-full md:w-1/2">
            <p class="mb-6 text-lg text-gray-600 leading-relaxed" data-aos="fade-left">
                Kami menghubungkan supplier bahan mentah dengan produsen secara efektif dan berkelanjutan.
            </p>

            <div class="mb-8">
                <h1 class="text-3xl font-extrabold text-gray-800 mb-2" data-aos="fade-left">Visi</h1>
                <p class="text-lg text-gray-600 leading-relaxed" data-aos="fade-left">
                    Menjadi platform utama yang mempercepat pertumbuhan ekonomi berbasis hilirisasi di seluruh
                    Indonesia.
                </p>
            </div>

            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 mb-2" data-aos="fade-left">Misi</h1>
                <p class="text-lg text-gray-600 leading-relaxed" data-aos="fade-left">
                    Meningkatkan kemudahan akses antara supplier dan produsen.
                    Mendorong kolaborasi investasi berbasis sektor strategis.
                    Membantu pengembangan ekonomi daerah melalui teknologi.
                </p>
            </div>
        </div>
    </div>

    <h1 class="text-3xl font-bold text-center" data-aos="fade-down">Layanan Kami</h1>
    <div class="flex flex-col gap-12 p-10 my-10 mx-8 sm:mx-16 lg:mx-28 rounded bg-slate-50 items-center justify-center">
        <div class="flex flex-col sm:flex-row items-center gap-8 sm:gap-4">
            <i class="ri-user-community-line p-5 rounded-full bg-[#28CB8B] text-white text-5xl" data-aos="fade-right"></i>
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold" data-aos="fade-right">Penyambung Supplier dan Produsen</h1>
                <p data-aos="fade-right">Membantu supplier menawarkan produk ke banyak produsen secara luas.</p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-8 sm:gap-4">
            <i class="ri-hand-coin-line p-5 rounded-full bg-[#28CB8B] text-white text-5xl" data-aos="fade-left"></i>
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold sm:text-left" data-aos="fade-left">Fasilitator Kerjasama Investasi</h1>
                <p data-aos="fade-left">Membuka peluang kolaborasi antara supplier, investor, dan pemilik lahan.</p>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="flex flex-col sm:flex-row items-center gap-8 sm:gap-4">
            <i class="ri-verified-badge-fill p-5 rounded-full bg-[#28CB8B] text-white text-5xl" data-aos="fade-right"></i>
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold" data-aos="fade-right">Verifikasi & Standarisasi</h1>
                <p data-aos="fade-right">Membantu memastikan kualitas dan legalitas transaksi untuk pengamanan.</p>
            </div>
        </div>
    </div>

    <h1 class="text-3xl font-bold text-center my-20" data-aos="fade-down">Testimoni Layanan</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper px-12">
            <!-- Testimonial 1 -->
            <div class="swiper-slide">
                <div data-aos="fade-down"
                    class="flex flex-col p-4 bg-gray-200 rounded-lg shadow-xl hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-400">20 Oktober 2022</p>
                        <i class="ri-quote-line text-2xl text-[#28CB8B]"></i>
                    </div>
                    <p class="mt-4 text-lg text-gray-600 italic">"Saya sangat puas dengan produk dari NusaGrow.
                        Kualitasnya sangat bagus dan harganya terjangkau."</p>
                    <p class="mt-4 text-lg font-semibold text-[#28CB8B]">- Rizky</p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="swiper-slide">
                <div data-aos="fade-down"
                    class="flex flex-col p-4 bg-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-400">20 Oktober 2022</p>
                        <i class="ri-quote-line text-2xl text-[#28CB8B]"></i>
                    </div>
                    <p class="mt-4 text-lg text-gray-600 italic">"Saya sangat puas dengan produk dari NusaGrow.
                        Kualitasnya sangat bagus dan harganya terjangkau."</p>
                    <p class="mt-4 text-lg font-semibold text-[#28CB8B]">- Rizky</p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="swiper-slide">
                <div data-aos="fade-down"
                    class="flex flex-col p-4 bg-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-400 italic">20 Oktober 2022</p>
                        <i class="ri-quote-line text-2xl text-[#28CB8B]"></i>
                    </div>
                    <p class="mt-4 text-lg text-gray-600">"Saya sangat puas dengan produk dari NusaGrow. Kualitasnya
                        sangat bagus dan harganya terjangkau."</p>
                    <p class="mt-4 text-lg font-semibold text-[#28CB8B]">- Rizky</p>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="swiper-slide">
                <div data-aos="fade-down"
                    class="flex flex-col p-4 bg-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-400 italic">20 Oktober 2022</p>
                        <i class="ri-quote-line text-2xl text-[#28CB8B]"></i>
                    </div>
                    <p class="mt-4 text-lg text-gray-600">"Saya sangat puas dengan produk dari NusaGrow. Kualitasnya
                        sangat bagus dan harganya terjangkau."</p>
                    <p class="mt-4 text-lg font-semibold text-[#28CB8B]">- Rizky</p>
                </div>
            </div>
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="flex flex-col lg:flex-row mx-6 lg:mx-24 py-20 lg:py-40 gap-10">
        <!-- Left Column (Text Section) -->
        <div class="w-full lg:w-1/2" data-aos="fade-up">
            <h1 class="text-4xl lg:text-6xl mb-5 font-bold">Kontak <br> Kami</h1>
            <p>Untuk Setiap Pertanyaan, perkiraan proyek atau Katakan saja Halo Get Touch Anda dapat menelepon atau
                mengobrol
                Bersama kami</p>
        </div>

        <!-- Right Column (Contact Info) -->
        <div class="w-full lg:w-1/2" data-aos="fade-up">
            <h1 class="text-2xl font-bold">Number</h1>
            <p class="mb-3">08123456789 / 08123456789</p>
            <h1 class="text-2xl font-bold">Ofice Address</h1>
            <p>Sumbersari Jl. Raya Sumbersari, Sumbersari, Jember</p>
            <a href=""
                class="bg-[#28CB8B] hover:bg-[#22a46b] mt-6 transition-all text-white py-2 px-4 rounded-md inline-block items-center gap-2">Kontak
                Kami</a>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row px-6 lg:px-12 py-8 gap-16 justify-between items-start">
        <!-- Left Column (Logo and Description) -->
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
            <img src="{{ asset('image/icon.png') }}" class="w-32 mb-6" alt="Logo">
            <p class="text-lg text-gray-600 mb-6">Jelajahi semua pengetahuan dan ilmu yang berguna bersama kami, untuk
                kehidupan yang lebih bermanfaat.</p>
            <div class="flex gap-4 text-3xl text-[#28CB8B]">
                <i class="ri-instagram-fill hover:text-gray-700 transition-all duration-300 cursor-pointer"></i>
                <i class="ri-facebook-circle-fill hover:text-gray-700 transition-all duration-300 cursor-pointer"></i>
                <i class="ri-linkedin-box-fill hover:text-gray-700 transition-all duration-300 cursor-pointer"></i>
            </div>
        </div>

        <!-- Info Column -->
        <div class="w-full lg:w-1/4 mb-8 lg:mb-0">
            <p class="font-bold text-xl mb-4">Informasi</p>
            <ul class="text-gray-600 space-y-2">
                <li class="hover:text-[#28CB8B] cursor-pointer transition-all duration-300">Artikel</li>
                <li class="hover:text-[#28CB8B] cursor-pointer transition-all duration-300">Galeri</li>
            </ul>
        </div>

        <!-- About Column -->
        <div class="w-full lg:w-1/4 mb-8 lg:mb-0">
            <p class="font-bold text-xl mb-4">Tentang</p>
            <ul class="text-gray-600 space-y-2">
                <li class="hover:text-[#28CB8B] cursor-pointer transition-all duration-300">Tentang Kami</li>
                <li class="hover:text-[#28CB8B] cursor-pointer transition-all duration-300">Hubungi Kami</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-5 mt-10 bg-gray-100 border-t-2 border-gray-200">
        <small class="text-gray-600">Copyright © 2025. All rights reserved.</small>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script>
        // Cek apakah browser mendukung Geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            document.getElementById("lokasi").innerText = "Geolocation tidak didukung browser ini.";
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            var circle = L.circle([latitude, longitude], {
                color: 'none',
                fillColor: '#f03',
                fillOpacity: 0.3,
                radius: 10000
            }).addTo(map);

            L.marker([latitude, longitude]).addTo(map).bindPopup('Posisi Saat ini').openPopup();

        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    document.getElementById("lokasi").innerText = "Izin lokasi ditolak.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    document.getElementById("lokasi").innerText = "Informasi lokasi tidak tersedia.";
                    break;
                case error.TIMEOUT:
                    document.getElementById("lokasi").innerText = "Permintaan lokasi timeout.";
                    break;
                case error.UNKNOWN_ERROR:
                    document.getElementById("lokasi").innerText = "Terjadi error yang tidak diketahui.";
                    break;
            }
        }


        var map = L.map('map').setView([-8.184486, 113.668076], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        $.ajax({
            url: "/api/get-data-produk",
            method: "GET",
            success: function(data) {
                console.log(data);

                data.forEach(element => {
                    // Mengambil koordinat dari setiap elemen data
                    var lat = element.latitude;
                    var lng = element.longitude;

                    // Menambahkan marker di posisi koordinat dari API
                    var markers = L.marker([lat, lng]).addTo(map);

                    // Mengikat popup dengan informasi yang sesuai untuk setiap marker
                    var popupContent = "<b>" + element.nama_produk + "</b><br>" +
                        "Harga: " + element.harga_produk + "<br>" +
                        "<a href='/products/detail/" + element.id_produk +
                        "' class='bg-[#dddddd] p-2 w-full text-center text-[16px] inline-block mt-4'>Lihat Detail</a>";

                    // Menambahkan popup secara langsung ke posisi yang diinginkan di peta
                    markers.bindPopup(popupContent);
                })
            }
        })
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1, // Default for mobile devices
            spaceBetween: 10, // Space between cards
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // When the viewport width is >= 640px, show 2 slides
                640: {
                    slidesPerView: 1,
                },
                // When the viewport width is >= 768px, show 2 slides
                768: {
                    slidesPerView: 2,
                },
                // When the viewport width is >= 1024px, show 3 slides
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
