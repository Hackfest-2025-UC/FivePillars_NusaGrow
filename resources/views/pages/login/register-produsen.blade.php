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

        <!-- Step Progress -->
        <div class="flex justify-center items-center mb-10 space-x-4" id="steps">
            <div class="step-item flex items-center space-x-2">
                <div class="step-circle w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center">1
                </div>
                <div class="w-16 h-1 bg-gray-300"></div>
            </div>
            <div class="step-item flex items-center space-x-2">
                <div
                    class="step-circle w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center">
                    2</div>
                <div class="w-16 h-1 bg-gray-300"></div>
            </div>
            <div class="step-item flex items-center space-x-2">
                <div
                    class="step-circle w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center">
                    3</div>
                <div class="w-16 h-1 bg-gray-300"></div>
            </div>
            <div class="step-item flex items-center">
                <div
                    class="step-circle w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center">
                    4</div>
            </div>
        </div>

        <div id="stepsContainer">
            <!-- Step 1 -->
            <form id="step1" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Perusahaan</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nama perusahaan">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">NPWP (Optional)</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="NPWP">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold mb-2">Deskripsi Perusahaan</label>
                    <textarea class="w-full border border-gray-300 rounded-md p-3 h-28" placeholder="Deskripsi"></textarea>
                </div>
            </form>

            <!-- Step 2 -->
            <form id="step2" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">Alamat</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="Alamat">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Kota</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="Kota">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Provinsi</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3" placeholder="Provinsi">
                </div>
            </form>

            <!-- Step 3 -->
            <form id="step3" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">Kontak Person</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nama Kontak">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Nomor Telepon</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Nomor Telepon">
                </div>
            </form>

            <!-- Step 4 -->
            <form id="step4" class="step-form grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <div>
                    <label class="block text-sm font-semibold mb-1">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Email Perusahaan">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Website</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-3"
                        placeholder="Website Perusahaan">
                </div>
            </form>
        </div>

        <div class="flex justify-between mt-10">
            <button id="prevBtn"
                class="bg-gray-300 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-400 transition hidden">
                Sebelumnya
            </button>
            <button id="nextBtn" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition">
                Selanjutnya
            </button>
        </div>

    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;

        const stepForms = document.querySelectorAll('.step-form');
        const stepsCircles = document.querySelectorAll('.step-circle');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function showStep(step) {
            stepForms.forEach((form, index) => {
                form.classList.toggle('hidden', index !== step - 1);
            });

            stepsCircles.forEach((circle, index) => {
                if (index < step) {
                    circle.classList.add('bg-green-500', 'text-white');
                    circle.classList.remove('bg-gray-300', 'text-gray-600');
                } else {
                    circle.classList.add('bg-gray-300', 'text-gray-600');
                    circle.classList.remove('bg-green-500', 'text-white');
                }
            });

            prevBtn.classList.toggle('hidden', step === 1);
            nextBtn.textContent = step === totalSteps ? 'Selesai' : 'Selanjutnya';
        }

        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            } else {
                alert('Formulir selesai dikirim!');
                // Tambahkan action submit di sini kalau mau
            }
        });

        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        showStep(currentStep);
    </script>

</body>

</html>
