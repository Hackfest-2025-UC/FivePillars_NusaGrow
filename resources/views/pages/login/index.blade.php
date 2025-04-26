<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- remix icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="flex items-center justify-center h-screen bg-gradient-to-b from-green-600 to-green-900">
    <div class="bg-white h-[650px] shadow-xl rounded-xl flex max-w-4xl w-full overflow-hidden">
        <div class="w-1/2 bg-cover bg-center relative" style="background-image: url('{{ asset('image/pabrik.jpeg') }}')">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="relative z-10 p-8 text-center text-white flex flex-col items-center justify-center h-full">
                <h1 class="text-3xl font-bold">NusaGrow</h1>
                <p class="mt-4 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, ducimus doloribus
                    ratione sint adipisci excepturi ullam et perspiciatis sunt porro, animi modi delectus? Voluptatum
                    dolor maxime aliquid quia repellendus ipsum.</p>
                <div class="relative mt-20 w-96">
                    {{-- <button id="registerButton"
                        class="bg-transparent border-2 border-white text-white font-bold px-4 py-2 rounded-md w-full hover:bg-white hover:text-black transition">
                        Register
                    </button> --}}

                    <div id="registerOptions"
                        class="hidden absolute w-full bg-white rounded-md shadow-md mt-2 overflow-hidden">
                        <p class="px-4 py-2 text-black text-uppercase">Pilih Sebagai :</p>
                        <a href="{{ route('register-produsen') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Produsen</a>
                        <a href="/register/investor" class="block px-4 py-2 text-black hover:bg-gray-200">Investor</a>
                        <a href="/register/supplier" class="block px-4 py-2 text-black hover:bg-gray-200">Supplier</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section (Login Form) -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <h2 class="text-2xl font-bold font-monospace text-center mb-2">Login</h2>
            <p class="text-center text-sm text-y-600 mb-6">Masukkan Email dan Password anda</p>
            <form class="" action="{{ route('cek-login') }}" method="POST">
                @csrf
                <div class="mb-8">
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <div
                        class="flex items-center border border-gray-300 rounded-md p-2 space-x-3 mt-1 focus-within:border-black">
                        <span class="material-icons text-green-700"><i class="ri-mail-line"></i></span>
                        <input type="email" id="email" placeholder="Masukkan email anda"
                            value="{{ old('email') }}" name="email"
                            class="w-full outline-none px-2 focus:border-black">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-black">Password</label>
                    <div
                        class="flex items-center border border-gray-300 rounded-md p-2 space-x-3 mt-1 focus-within:border-black">
                        <span class="material-icons text-green-700"><i class="ri-key-2-fill"></i></span>
                        <input type="password" id="password" placeholder="Masukkan password anda"
                            value="{{ old('password') }}" name="password"
                            class="w-full outline-none px-2 focus:border-black">
                    </div>
                </div>
                <button
                    class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">LOGIN</button>
            </form>
        </div>
    </div>

    <script>
        const registerButton = document.getElementById('registerButton');
        const registerOptions = document.getElementById('registerOptions');

        registerButton.addEventListener('click', () => {
            registerOptions.classList.toggle('hidden');
        });
    </script>
</body>

</html>
