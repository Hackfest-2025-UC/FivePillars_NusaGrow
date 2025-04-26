<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Step Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-green-500">

    <div class="bg-white rounded-3xl shadow-xl p-10 max-w-5xl w-full mx-4">
        <!-- Judul -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold">Daftar Akun</h1>
            <p class="text-gray-400 mt-2">Isi data dengan benar</p>
        </div>


        <form id="multiStepForm" action="{{ route('register-produsen') }}" method="POST">
            @csrf
            <!-- Step 1 -->
            <div id="step1" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Produsen</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nama perusahaan" name="nama_produsen">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Alamat Produsen</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="alamat_produsen" name="alamat_produsen">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Email Produsen</label>
                    <input type="email" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nama perusahaan" name="email_produsen">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Pasword Produsen</label>
                    <input type="password" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Password Produsen" name="password_produsen">
                </div>
            </div>

            <!-- Step 2 -->
            <div id="step2" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Perusahaan</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nama perusahaan" name="nama_perusahaan">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">NPWP (Optional)</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="NPWP"
                        name="NPWP">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Jenis Perusahan</label>
                    <select name="jenis_perusahaan" class="w-full border border-gray-300 rounded-md p-3">
                        <option value="">Pilih jenis perusahaan</option>
                        <option value="perusahaan">Perusahaan</option>
                        <option value="perorangan">Perorangan</option>
                        <option value="dinas">Dinas</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Deskripsi Perusahaan</label>
                    <textarea class="w-full border border-gray-300 rounded-md p-3 h-28" name="deskripsi_perusahaan" placeholder="Deskripsi"></textarea>
                </div>
                <div>
                    <label class="text-sm font-semibold">Sektor Industri</label>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex items-start mt-3">
                            <input type="radio" class="mt-1 mr-2" name="sektor_industri" value="Pertanian">
                            <label class="text-sm font-semibold">Pertanian</label>
                        </div>
                        <div class="flex items-start mt-3">
                            <input type="radio" class="mt-1 mr-2" name="sektor_industri" value="Elektronik">
                            <label class="text-sm font-semibold">Elektronik</label>
                        </div>
                        <div class="flex items-start mt-3">
                            <input type="radio" class="mt-1 mr-2" name="sektor_industri"
                                value="Peralatan Rumah Tangga">
                            <label class="text-sm font-semibold">Peralatan Rumah Tangga</label>
                        </div>
                        <div class="flex items-start">
                            <input type="radio" class="mt-1 mr-2" name="sektor_industri" value="Bahan Makanan">
                            <label class="text-sm font-semibold">Bahan Makanan</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div id="step3" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">No Telpon</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="No Telpon"
                        name="no_telpon">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Email Perusahaan</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Email Perusahaan" name="email_perusahaan">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Website Perusahaan (Optional)</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Website Perusahaan" name="website_perusahaan">
                </div>
            </div>

            <!-- Step 4 -->
            <div id="step4" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="w-full border border-gray-300 rounded-md p-3">
                        <option><--- Pilih Provinsi ---></option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Kabupaten</label>
                    <select name="kabupaten" id="kabupaten" class="w-full border border-gray-300 rounded-md p-3">
                        <option value=""><--- Pilih Kabupaten ---></option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="w-full border border-gray-300 rounded-md p-3">
                        <option value=""><--- Pilih kecamatan ---></option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Kelurahan</label>
                    <select name="kelurahan" id="kelurahan" class="w-full border border-gray-300 rounded-md p-3">
                        <option value=""><--- Pilih kelurahan ---></option>
                    </select>
                </div>
            </div>

            <!-- Navigasi Tombol -->
            <div class="flex justify-between mt-10">
                <button type="button" id="prevBtn"
                    class="bg-gray-300 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-400 transition hidden">
                    Sebelumnya
                </button>
                <button type="button" id="nextBtn"
                    class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition">
                    Selanjutnya
                </button>
                <button type="submit" id="submitBtn"
                    class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition hidden">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentStep = 1;
            const totalSteps = 4;

            const stepForm = document.querySelectorAll(".step-form");
            const nextBtn = document.getElementById("nextBtn");
            const prevBtn = document.getElementById("prevBtn");

            // Show the current step and hide the others
            function showStep(step) {
                stepForm.forEach((form, index) => {
                    if (index + 1 === step) {
                        form.classList.remove("hidden");
                    } else {
                        form.classList.add("hidden");
                    }
                });

                // Show or hide the 'Previous' and 'Next' buttons
                if (step === 1) {
                    prevBtn.classList.add("hidden");
                } else {
                    prevBtn.classList.remove("hidden");
                }

                if (step === totalSteps) {
                    nextBtn.classList.add("hidden"); // Hide the 'Next' button on last step
                    document.getElementById("submitBtn").classList.remove("hidden"); // Show 'Save' button
                } else {
                    nextBtn.classList.remove("hidden");
                    document.getElementById("submitBtn").classList.add("hidden");
                }
            }

            // Next button functionality
            nextBtn.addEventListener("click", function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            // Previous button functionality
            prevBtn.addEventListener("click", function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Initial setup
            showStep(currentStep);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                method: "get",
                success(res) {
                    console.log(res)
                    var data = res;
                    var tampung = "";
                    if ($("#check").val() == 0) {
                        tampung = "<option><-- Pilih Provinsi --></option>";
                    } else {
                        var prov = $("#check").val();
                        tampung = `<option selected>${prov}</option>`
                    }
                    data.forEach(element => {
                        tampung +=
                            `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                    });
                    $("#provinsi").html(tampung);
                },
                error(err) {
                    console.log(err);
                }
            })

            $("#provinsi").change(function(e) {
                var idProvinsi = e.target.options[e.target.selectedIndex].dataset.reg;

                $.ajax({
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${idProvinsi}.json`,
                    method: "get",
                    success(res) {
                        console.log(res)
                        var data = res;
                        $("#kabupaten").html("<option>-- Pilih Kab/Kota --</option>");
                        $("#kecamatan").html("<option>-- Pilih Kecamatan --</option>");
                        $("#kelurahan").html("<option>-- Pilih Kelurahan --</option>");
                        var tampung = "<option>-- Pilih Kab/Kota --</option>";
                        data.forEach(element => {
                            tampung +=
                                `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                        });
                        $("#kabupaten").html(tampung);
                    },
                    error(err) {
                        console.log(err);
                    }
                })
            })

            $("#kabupaten").change(function(e) {
                var idKota = e.target.options[e.target.selectedIndex].dataset.reg;

                $.ajax({
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${idKota}.json`,
                    method: "get",
                    success(res) {
                        console.log(res)
                        var data = res;
                        var tampung = "<option>-- Pilih Kecamatan --</option>";
                        $("#kecamatan").html("<option>-- Pilih Kecamatan --</option>");
                        data.forEach(element => {
                            tampung +=
                                `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                        });
                        $("#kecamatan").html(tampung);
                    },
                    error(err) {
                        console.log(err);
                    }
                })
            })

            $("#kecamatan").change(function(e) {
                var idKecamatan = e.target.options[e.target.selectedIndex].dataset.reg;

                $.ajax({
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${idKecamatan}.json`,
                    method: "get",
                    success(res) {
                        console.log(res)
                        var data = res;
                        var tampung = "<option>-- Pilih Kelurahan --</option>";
                        $("#kelurahan").html("<option>-- Pilih Kelurahan --</option>");
                        data.forEach(element => {
                            tampung +=
                                `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`
                        });
                        $("#kelurahan").html(tampung);
                    },
                    error(err) {
                        console.log(err);
                    }
                })
            })
        });
    </script>
</body>

</html>
