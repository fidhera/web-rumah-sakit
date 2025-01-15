<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Apotek Online</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar (navbar.blade.php) -->
        <x-header>Apotek</x-header> <!-- Mengambil Header (header.blade.php) -->

        <!-- Section Daftar Obat -->
        <section class="py-16 bg-gray-50" id="produk">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Obat-Obat Terpopuler</h2>

                <!-- Grid Card Produk -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Card Obat 1 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 1" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Paracetamol</h3>
                            <p class="text-gray-600">Obat penurun demam dan nyeri.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 10.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 2 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 2" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Vitamin C</h3>
                            <p class="text-gray-600">Meningkatkan daya tahan tubuh.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 25.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 3 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 3" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Obat Batuk</h3>
                            <p class="text-gray-600">Meredakan batuk dan pilek.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 15.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 4 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 4" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Obat Pusing</h3>
                            <p class="text-gray-600">Meringankan pusing dan migrain.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 12.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- Card Obat 5 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 5" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Antibiotik</h3>
                            <p class="text-gray-600">Untuk melawan infeksi bakteri.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 40.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 6 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 6" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Ibuprofen</h3>
                            <p class="text-gray-600">Obat pereda nyeri dan inflamasi.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 20.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 7 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 7" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Loperamide</h3>
                            <p class="text-gray-600">Obat untuk mengatasi diare.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 10.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 8 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 8" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Omeprazole</h3>
                            <p class="text-gray-600">Obat untuk gangguan pencernaan.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 18.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 9 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 9" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Cetirizine</h3>
                            <p class="text-gray-600">Obat antihistamin untuk alergi.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 22.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 10 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 10" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Amlodipine</h3>
                            <p class="text-gray-600">Obat untuk menurunkan tekanan darah tinggi.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 35.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 11 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 11" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Furosemide</h3>
                            <p class="text-gray-600">Obat untuk mengatasi edema.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 30.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 12 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 12" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Metformin</h3>
                            <p class="text-gray-600">Obat untuk mengontrol gula darah pada diabetes.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 50.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 13 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 13" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Dextromethorphan
                            </h3>
                            <p class="text-gray-600">Obat untuk meredakan batuk kering.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 15.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 14 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 14" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Lorazepam</h3>
                            <p class="text-gray-600">Obat penenang untuk kecemasan.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 55.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 15 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 15" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Simvastatin</h3>
                            <p class="text-gray-600">Obat penurun kolesterol.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 60.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Obat 16 -->
                    <div
                        class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300" alt="Obat 16" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Diazepam</h3>
                            <p class="text-gray-600">Obat untuk meredakan kecemasan dan kejang.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-blue-600">Rp 45.000</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform">
                                    Beli
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Section Testimonial -->
        <section class="py-16 bg-blue-50" id="testimonial">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Apa Kata Mereka?</h2>

                <!-- Testimonial Carousel -->
                <div class="flex flex-wrap justify-center gap-6">
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Layanan yang sangat cepat dan obat selalu tersedia di apotek
                            ini."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Sarah, Pelanggan</p>
                    </div>
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Harga yang terjangkau dan obat-obatan selalu berkualitas
                            tinggi."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- John, Pelanggan</p>
                    </div>
                    <div
                        class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Saya selalu mendapatkan rekomendasi obat yang tepat untuk
                            kondisi saya."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Maria, Pelanggan</p>
                    </div>
                </div>
            </div>
        </section>

        <x-footer></x-footer> <!-- Mengambil Footer (footer.blade.php) -->
    </div>

</body>

</html>
