<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dokter Spesialis</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar (navbar.blade.php) -->
        <x-header>Dokter Spesialis</x-header> <!-- Mengambil Header (header.blade.php) -->

        <!-- Layanan Section -->
        <section class="py-16 bg-blue-50" id="layanan">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Layanan Spesialis Kami</h2>
                
                <!-- Card Layanan -->
                <div class="space-y-12">
                    <!-- Card 1: Spesialis Jantung -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://img-cdn.medkomtek.com/T3RzjyfKEPVXeJ7jbkVXb9TalhY=/0x0/smart/filters:quality(100):format(webp)/article/0NBVnSugbw1wsjy60nSIU/original/045454500_1624422765-Kardiolog-Dokter-Spesialis-Jantung.jpg" alt="Spesialis Jantung" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Spesialis Jantung</h3>
                            <p class="text-gray-600">Pemeriksaan dan pengobatan penyakit jantung yang dilakukan oleh dokter spesialis jantung berpengalaman.</p>
                        </div>
                    </div>

                    <!-- Card 2: Spesialis Mata -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://rsmatasmec.com/files/uploads/hgallery/image/2020/Mar/17/5e7085b0b6931/smec-6-1103x530.jpg?token=3f37a9b3ae5240ea4aabfc8793c4be5e" alt="Spesialis Mata" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Spesialis Mata</h3>
                            <p class="text-gray-600">Konsultasi dan pengobatan untuk masalah kesehatan mata seperti rabun jauh, rabun dekat, dan lainnya.</p>
                        </div>
                    </div>

                    <!-- Card 3: Spesialis Kulit -->
                    <div class="group relative bg-white shadow-lg rounded-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
                        <img src="https://image.popmama.com/content-images/post/20210122/kk-18fdbf250ffeb5a86b16a5fb21205315.jpg?tr=w-600,h-auto&width=600&height=auto" alt="Spesialis Kulit" class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-blue-600">Spesialis Kulit</h3>
                            <p class="text-gray-600">Penanganan masalah kulit mulai dari jerawat, alergi kulit, hingga penyakit kulit lainnya oleh dokter kulit ahli.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 bg-gray-50" id="testimonial">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Apa Kata Pasien Kami?</h2>
        
                <!-- Testimonial Carousel -->
                <div class="flex flex-wrap justify-center gap-6">
                    <!-- Testimonial 1 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Pelayanan yang sangat baik, dokter spesialis sangat membantu dalam menjelaskan kondisi saya dengan jelas!"</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Bagas, Pasien</p>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Dokter spesialisnya sangat ramah dan memberikan solusi terbaik untuk kesehatan mata saya."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Jojo, Pasien</p>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Saya merasa sangat puas dengan pelayanan yang diberikan. Terima kasih banyak!"</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Valen, Pasien</p>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Rumah sakit ini sangat bersih dan nyaman. Proses pendaftaran juga cepat dan mudah."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Candra, Pasien</p>
                    </div>
                    <!-- Testimonial 5 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Dokter anaknya sangat sabar dan ramah. Anak saya jadi tidak takut saat diperiksa."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Jaki, Pasien</p>
                    </div>
                    <!-- Testimonial 6 -->
                    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm transform transition-transform hover:scale-105 hover:shadow-xl">
                        <p class="text-gray-600 italic">"Merawat pasien di rumah sakit ini adalah pengalaman yang sangat berharga. Fasilitas yang lengkap dan tim medis yang profesional membuat kami dapat memberikan pelayanan terbaik."</p>
                        <p class="mt-4 text-right text-gray-700 font-semibold">- Azriel, Dokter</p>
                    </div>                    
                </div>
            </div>
        </section>
        

        <!-- Kontak Section -->
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
