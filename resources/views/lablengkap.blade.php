<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar  (navbar.blade.php)-->
        <x-header>Laboratorium Lengkap</x-header> <!-- Mengambil Header  (header.blade.php)-->

        <!-- Section Daftar Alat Laboratorium -->
        <section class="py-16 bg-gray-50" id="lab-equipment">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Alat-Alat Laboratorium</h2>

                <!-- Grid Card Alat -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Card Alat 1 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 1" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Mikroskop</h3>
                            <p class="text-gray-600">Untuk mengamati objek mikroskopis.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 5.000.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Alat 2 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 2" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Pipet</h3>
                            <p class="text-gray-600">Digunakan untuk mengukur volume cairan.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 100.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Alat 3 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 3" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Tabung Reaksi</h3>
                            <p class="text-gray-600">Untuk percobaan reaksi kimia.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 50.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Alat 4 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 4" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Autoklaf</h3>
                            <p class="text-gray-600">Alat untuk sterilisasi peralatan laboratorium.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 15.000.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Alat 5 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 5" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Refraktometer</h3>
                            <p class="text-gray-600">Mengukur indeks bias bahan cair.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 2.500.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Alat 6 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Alat 6" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Sentrifugal</h3>
                            <p class="text-gray-600">Alat untuk memisahkan partikel berdasarkan kecepatan putaran.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 8.000.000</span>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-footer></x-footer> <!-- Mengambil Footer  (footer.blade.php)-->

    </div>

</body>

</html>
