<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Klinik Dokter Gigi</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar (navbar.blade.php) -->
        <x-header>Dokter Gigi</x-header> <!-- Mengambil Header (header.blade.php) -->

        <!-- Section Layanan -->
        <section class="py-16 bg-gray-50" id="layanan">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Layanan Kami</h2>

                <!-- Grid Layanan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Layanan 1 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300x200?text=Konsultasi+Gigi" alt="Konsultasi Gigi" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Konsultasi Gigi</h3>
                            <p class="text-gray-600">Dapatkan saran dari dokter gigi berlisensi untuk perawatan terbaik.</p>
                        </div>
                    </div>

                    <!-- Layanan 2 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300x200?text=Perawatan+Gigi" alt="Perawatan Gigi" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Perawatan Gigi</h3>
                            <p class="text-gray-600">Layanan perawatan gigi untuk menjaga kebersihan dan kesehatan gigi Anda.</p>
                        </div>
                    </div>

                    <!-- Layanan 3 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300x200?text=Pemeriksaan+Rutin" alt="Pemeriksaan Rutin" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Pemeriksaan Rutin</h3>
                            <p class="text-gray-600">Pemeriksaan gigi rutin untuk deteksi dini masalah gigi.</p>
                        </div>
                    </div>

                    <!-- Layanan 4 -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://via.placeholder.com/300x200?text=Pencabutan+Gigi" alt="Pencabutan Gigi" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600">Pencabutan Gigi</h3>
                            <p class="text-gray-600">Layanan pencabutan gigi dengan teknik modern dan minim rasa sakit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial -->
        <section class="py-16 bg-blue-50" id="testimonial">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Apa Kata Pasien?</h2>

                <!-- Testimonial Carousel -->
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Pelayanan yang sangat ramah, dokter gigi sangat profesional dan membuat saya merasa nyaman."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Sarah, Pasien</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Dokter gigi yang sangat sabar dan memberikan penjelasan yang sangat jelas mengenai kondisi gigi saya."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- John, Pasien</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Proses perawatan gigi sangat cepat dan tidak terasa sakit, saya sangat puas."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Maria, Pasien</p>
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
