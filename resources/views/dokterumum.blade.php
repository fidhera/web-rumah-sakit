<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dokter Umum</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar (navbar.blade.php) -->
        <x-header>Dokter Umum</x-header> <!-- Mengambil Header (header.blade.php) -->

        <!-- Slider Section -->
        <section class="py-16 bg-blue-50" id="slider">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Layanan Kami</h2>
                
                <!-- Slider Panjang -->
                <div class="space-y-12">
                    <!-- Card 1: Pemeriksaan Kesehatan -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/1200x600?text=Pemeriksaan+Kesehatan" alt="Pemeriksaan Kesehatan" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Pemeriksaan Kesehatan</h3>
                            <p class="text-gray-600">Lakukan pemeriksaan kesehatan secara rutin untuk menjaga kesehatan tubuh Anda.</p>
                        </div>
                    </div>

                    <!-- Card 2: Konsultasi Kesehatan -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/1200x600?text=Konsultasi+Kesehatan" alt="Konsultasi Kesehatan" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Konsultasi Kesehatan</h3>
                            <p class="text-gray-600">Kami siap membantu memberikan solusi dan saran mengenai kondisi kesehatan Anda.</p>
                        </div>
                    </div>

                    <!-- Card 3: Pengobatan Umum -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/1200x600?text=Pengobatan+Umum" alt="Pengobatan Umum" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Pengobatan Umum</h3>
                            <p class="text-gray-600">Layanan pengobatan umum yang lengkap untuk semua usia dengan penanganan profesional.</p>
                        </div>
                    </div>

                    <!-- Card 4: Penyuluhan Kesehatan -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/1200x600?text=Penyuluhan+Kesehatan" alt="Penyuluhan Kesehatan" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Penyuluhan Kesehatan</h3>
                            <p class="text-gray-600">Kami mengadakan berbagai program penyuluhan untuk meningkatkan kesadaran kesehatan masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial -->
        <section class="py-16 bg-gray-50" id="testimonial">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Apa Kata Pasien?</h2>

                <!-- Testimonial Carousel -->
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Dokter sangat membantu dalam memberikan solusi kesehatan yang tepat. Proses konsultasi sangat nyaman!"</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Lina, Pasien</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Pelayanan yang sangat ramah dan informatif. Sangat puas dengan pengobatan yang diberikan."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Rudi, Pasien</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Konsultasi dengan dokter umum sangat membantu dalam menjaga kesehatan saya. Terima kasih!"</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Andi, Pasien</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Kontak -->
        <section class="py-16 bg-white" id="kontak">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Hubungi Kami</h2>
                <div class="max-w-md mx-auto">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-lg font-semibold text-gray-700">Nama Anda</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-lg font-semibold text-gray-700">Email Anda</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-lg font-semibold text-gray-700">Pesan Anda</label>
                            <textarea id="message" name="message" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-transform">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <x-footer></x-footer> <!-- Mengambil Footer (footer.blade.php) -->
    </div>

</body>

</html>
