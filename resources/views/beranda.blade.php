<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tambahkan Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Link Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        /* Menghilangkan scrollbar */
        .swiper-container {
            overflow: hidden;
        }

        .swiper-slide img {
            cursor: pointer;
            /* Mengubah kursor menjadi jari saat di hover */
        }
    </style>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar  (navbar.blade.php)-->
        {{-- <x-header>Selamat datang di R.S Sejahtera</x-header> <!-- Mengambil Header  (header.blade.php)--> --}}



        <section id="hero" class="relative bg-gray-100 pb-20 mb-15 pt-15">
            <img src="{{ asset('img/hero-bg.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-75">
        
            <div class="container mx-auto relative z-10 text-gray-800">
                <!-- Welcome Section -->
                <div class="py-20 max-w-xl text-left mt-8 mb-0">
                    <h2 class="text-4xl font-bold text-gray-800">SELAMAT DATANG DI R.S SEJAHTERA</h2>
                    <p class="text-lg mt-4">
                        Kita adalah tim, yang termotivasi dari 2 kata "Pemuda Sejahtera".
                    </p>
                </div>
                
                <!-- Content Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Why Choose Medilab -->
                    <div class="bg-white p-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="zoom-out" data-aos-delay="200">
                        <h3 class="text-2xl font-semibold mb-4 text-blue-600 hover:underline">Kenapa harus memilih R.S Sejahtera?</h3>
                        <p class="text-gray-700">
                            Rawat Inap Asyik, Serasa Staycation, kamar nyaman seperti hotel, pelayanan hangat seperti rumah. Dokternya Ramah, Suster Nggak Galak! Dijamin, kami semua di sini cuma bikin Anda sehat, bukan deg-degan.
                        </p>
                        <div class="text-center mt-6">
                            <a href="/tentang"
                               class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
                                Selengkapnya →
                                <i class="bi bi-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
        
                    <!-- Icon Boxes -->
                    <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-6 mt-5 mb-5">
                        <!-- Box 1 -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="zoom-out" data-aos-delay="300">
                            <i class="bi bi-clipboard-data text-blue-600 text-3xl mb-4"></i>
                            <h4 class="text-xl font-semibold mb-2 hover:underline">Pelayanan Medis Modern dengan Sentuhan Sutra.</h4>
                            <p class="text-gray-600 pt-5">Kami menggunakan teknologi terkini yang dipadukan dengan pelayanan penuh perhatian untuk memastikan kenyamanan pasien.</p>
                        </div>
                        <!-- Box 2 -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="zoom-out" data-aos-delay="400">
                            <i class="bi bi-gem text-blue-600 text-3xl mb-4"></i>
                            <h4 class="text-xl font-semibold mb-2 hover:underline">Kami Hadir untuk Membantu Anda Pulih Lebih Cepat!.</h4>
                            <p class="text-gray-600 pt-5">Dengan tim medis profesional dan program rehabilitasi yang terarah, kami mendukung pemulihan Anda secara optimal.</p>
                        </div>
                        <!-- Box 3 -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="zoom-out" data-aos-delay="500">
                            <i class="bi bi-inboxes text-blue-600 text-3xl mb-4"></i>
                            <h4 class="text-xl font-semibold mb-2 hover:underline">Kami Peduli, Kami Melayani, Kami Sejahtera.</h4>
                            <p class="text-gray-600 pt-5">Filosofi pelayanan kami adalah memberikan perawatan berkualitas dengan penuh rasa empati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        



        <!-- Container Swiper -->
        <main>
            <div class="swiper-container w-full h-full mt-20 pt-20">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex items-center justify-center px-40 bg-blue-500">
                        <div class="relative w-full h-[339px]">
                            <img src="img/slide1.png" alt="Informasi Pelayanan"
                                class="absolute left-1/2 transform -translate-x-1/2 w-full h-full object-contain">
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide flex items-center justify-center px-40 bg-blue-500">
                        <div class="relative w-full h-[339px]">
                            <img src="img/slide2.png" alt="Fasilitas Rumah Sakit"
                                class="absolute left-1/2 transform -translate-x-1/2 w-full h-full object-contain">
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide flex items-center justify-center px-40 bg-blue-500">
                        <div class="relative w-full h-[339px]">
                            <img src="img/slide3.png" alt="Jadwal Dokter"
                                class="absolute left-1/2 transform -translate-x-1/2 w-full h-full object-contain">
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="swiper-button-next w-8 h-8 text-white"></div>
                    <div class="swiper-button-prev w-8 h-8 text-white"></div>

                    <!-- Pagination (Titik-titik) -->
                    <div class="swiper-pagination mb-4 absolute bottom-2 left-1/2 transform -translate-x-1/2"></div>
                </div>
            </div>
        </main>

        <!-- <x-header></x-header>  Mengambil Header  (header.blade.php)-->


        <!-- Card Content -->
        <main>
            <div class="bg-white py-20 mt-5 mb-5">
                <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Call Center -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Call Center</h3>
                        <p>+62858 1771 0880</p>
                        <p>pemasaran@rsTEST.co.id</p>
                        <a href="/kontak" class="mt-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Selengkapnya →
                        </a>
                    </div>

                    <!-- Jadwal Dokter -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="far fa-clock"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Jadwal Dokter</h3>
                        <a href="#" class="mt-2 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Klinik BPJS →
                        </a>
                        <a href="#" class="mt-2 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Klinik Eksekutif Merial →
                        </a>
                    </div>

                    <!-- Lokasi -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Alamat</h3>
                        <p>Jl. KS Tubun 92-94</p>
                        <p>Jakarta Barat</p>
                        <a href="/kontak" class="mt-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Selengkapnya →
                        </a>
                    </div>

                    <!-- Sistem Antrian -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Sistem Antrian</h3>
                        <p>Mengurangi waktu tunggu pasien dengan sistem antrian otomatis.</p>
                        <!-- Ganti '/layanan' dengan route 'antrian.index' -->
                        <a href="{{ route('antrian.index') }}"
                            class="mt-4 mb-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Selengkapnya →
                        </a>

                        <!-- Tombol atau informasi terkait antrian -->
                        @if (isset($antrian) && $antrian)
                            <!-- Tombol untuk mengarahkan ke halaman popup dengan ID antrian -->
                            <a href="{{ route('antrian.popup', ['id' => $antrian->id]) }}"
                                class="mt-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                                Cek Antrian →
                            </a>
                        @else
                            <!-- Menampilkan total jumlah antrian -->
                            @php
                                $totalAntrian = \App\Models\Antrian::count();
                            @endphp
                            @if ($totalAntrian > 0)
                                <p>Terdapat {{ $totalAntrian }} Antrian</p>
                            @else
                                <p>Data antrian tidak tersedia.</p>
                            @endif
                        @endif
                    </div>



                    <!-- Layanan Ambulans -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Layanan Ambulans</h3>
                        <p>Layanan ambulans 24 jam siap membantu keadaan darurat.</p>
                        <a href="/layanan" class="mt-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Selengkapnya →
                        </a>
                    </div>

                    <!-- Ruang Rawat Inap -->
                    <div
                        class="flex flex-col items-center bg-blue-700 p-6 rounded-lg text-white transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="text-4xl mb-4">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Ruang Rawat Inap</h3>
                        <p>Fasilitas rawat inap yang nyaman dan modern bagi pasien.</p>
                        <a href="/fasilitas" class="mt-4 px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        </main>



        <!-- Highlight -->
        {{-- <div class="bg-white shadow py-20 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-wider text-gray-900 text-underline-offset-4">Highlight</h1>
                <p class="mt-4">Ini adalah konten utama.</p>
            </div>
        </div> --}}

        <!-- Highlight Section -->
        <div class="bg-white shadow py-20">
            <div class="container mx-auto px-6">
                <!-- Judul Section -->
                <h1 class="text-3xl font-bold text-center text-gray-900 mb-8">Tentang Rumah Sakit Kami</h1>

                <!-- Grid untuk Konten -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Visi dan Misi -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Visi dan Misi</h2>
                        <p class="text-gray-700">
                            Rumah Sakit Sejahtera berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas,
                            terjangkau, dan ramah kepada seluruh pasien. Visi kami adalah menjadi rumah sakit terdepan
                            dalam inovasi dan pelayanan kesehatan.
                        </p>
                    </div>

                    <!-- Fasilitas Unggulan -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Fasilitas Unggulan</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Ruang operasi berteknologi tinggi.</li>
                            <li>Unit perawatan intensif (ICU) yang lengkap.</li>
                            <li>Laboratorium diagnostik dengan akurasi tinggi.</li>
                            <li>Ruang rawat inap yang nyaman dan higienis.</li>
                        </ul>
                    </div>

                    <!-- Tim Medis Profesional -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Tim Medis Profesional</h2>
                        <p class="text-gray-700">
                            Didukung oleh tim dokter, perawat, dan tenaga medis yang berpengalaman dan bersertifikasi.
                            Spesialisasi kami meliputi Kardiologi, Neurologi, Pediatri, Bedah Umum, dan Kebidanan &
                            Kandungan.
                        </p>
                    </div>

                    <!-- Layanan Unggulan -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Layanan Unggulan</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Pelayanan rawat jalan dan rawat inap.</li>
                            <li>Pemeriksaan kesehatan rutin (medical check-up).</li>
                            <li>Konsultasi spesialis.</li>
                            <li>Program kesehatan preventif dan promotif.</li>
                        </ul>
                    </div>

                    <!-- Program Khusus -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Program Khusus</h2>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>BPJS Kesehatan.</li>
                            <li>Klinik Eksekutif.</li>
                            <li>Program Promosi Kesehatan.</li>
                        </ul>
                    </div>

                    <!-- Testimoni Pasien -->
                    <div
                        class="bg-blue-50 p-6 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <h2 class="text-xl font-semibold text-blue-700 mb-4">Testimoni Pasien</h2>
                        <blockquote class="text-gray-700 italic">
                            "Pelayanan di Rumah Sakit Sejahtera sangat memuaskan. Dokter dan perawat sangat ramah dan
                            profesional. Fasilitasnya juga lengkap dan nyaman." – <span class="font-semibold">Budi,
                                Pasien Rawat Inap</span>
                        </blockquote>
                    </div>
                </div>


                <x-cardokter></x-cardokter>


                <!-- Kontak dan Lokasi -->
                <div class="mt-12 text-center">
                    <h2 class="text-2xl font-bold text-blue-700 mb-4">Kontak dan Lokasi</h2>
                    <p class="text-gray-700">Jl. KS Tubun 92-94, Jakarta Barat</p>
                    <p class="text-gray-700">Telepon: +62858 1771 0880</p>
                    <p class <!-- Tambahkan Swiper.js -->
                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">


                </div>
                <script>
                    // Inisialisasi Swiper dengan opsi autoplay
                    const swiper = new Swiper('.swiper-container', {
                        loop: true, // Mengaktifkan looping
                        autoplay: {
                            delay: 3000, // Waktu delay 3 detik
                            disableOnInteraction: false, // Tetap autoplay meskipun ada interaksi
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            dynamicBullets: false, // Pagination tetap terlihat utuh
                        },
                    });
                </script>



                <script>
                    // Inisialisasi Swiper
                    const swiper = new Swiper('.swiper-container', {
                        loop: true, // Membuat slider berulang
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                </script>

            </div>


            {{-- <footer class="bg-gray-800 py-6 mt-12 w-full fixed bottom-0 left-0 z-40">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <p class="text-white text-sm">
                            Copyright by RS Sejahtera 2025. All rights reserved.
                        </p>
                    </div>
                </footer> --}}


        </div>
    </div>

    
<footer class="bg-gray-900 py-8 text-center text-white mt-10">
    <p>© 2025 RS Sejahtera. All Rights Reserved.</p>
</footer>
</body>



</html>
