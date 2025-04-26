<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChatBot</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')
    <section class="flex w-full h-screen pt-16 px-4">
        <div class="w-[25%] border-r border-gray-200">
            @for ($i = 0; $i < 5; $i++) <div
                class="flex gap-3 items-center border-b py-4 border-gray-200 border-dashed">
                <img src="../profile.webp" alt="" class="w-12 h-12 rounded-full">
                <div class="w-full pe-5">
                    <div class="flex justify-between w-full">
                        <p class="font-medium">Nico Flassy</p>
                        <p class="font-medium text-gray-400 text-[12px]">25 Jan</p>
                    </div>
                    <p>Halo, nama saya Nico..</p>
                </div>
        </div>
        @endfor
        </div>
        <div class="w-[75%] px-8 py-6 flex flex-col gap-8 items-start justify-between">
            <div class="flex flex-col w-full">
                <div class="flex justify-start">
                    <div class="flex gap-3 items-center bg-green-800 px-6 py-4 pr-8 rounded-lg text-white">
                        <img src="../profile.webp" alt="" class="w-12 h-12 rounded-full">
                        <div>
                            <div class="flex">
                                <p class="font-medium">Nico Flassy</p>
                            </div>
                            <p>Halo, nama saya Nico..</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end w-full">
                    <div class="flex gap-3 items-center bg-gray-100 px-6 py-4 pr-8 rounded-lg text-black">
                        <img src="../profile.webp" alt="" class="w-12 h-12 rounded-full">
                        <div>
                            <div class="flex">
                                <p class="font-medium">Nico Flassy</p>
                            </div>
                            <p>Halo, nama saya Nico..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-center gap-2">
                <input placeholder="Ketik pesan Anda..." class="text-gray-600 px-4 py-2 rounded-sm border border-gray-300 w-full"></input>
                <button class="bg-gray-800 text-white px-4 py-2 rounded-sm">Submit</button>
            </div>
        </div>
    </section>
</body>

</html>
