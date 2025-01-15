<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar> <!-- Mengambil Navbar  (navbar.blade.php)-->
        <x-header>Sejarah Kami</x-header> <!-- Mengambil Header  (header.blade.php)-->
    </div>


    <!-- halaman sejarah -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-6 lg:px-20">
            <!-- title Section -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Sejarah Rumah Sakit Kami</h2>
                <p class="mt-4 text-gray-600">Menjadi bagian dari perjalanan kesehatan sejak awal pendirian hingga kini, dengan komitmen melayani masyarakat.</p>
            </div>
    
            <!-- Timeline Section -->
            <div class="relative">
                <div class="border-l-4 border-blue-600 absolute left-1/2 transform -translate-x-1/2 h-full"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
    
                    <!-- Timeline Item 1 -->
                    <div class="relative md:pr-10">
                        {{-- <div class="absolute -left-8 top-0 bg-blue-600 rounded-full p-4">
                            <i class="fas fa-hospital text-white text-xl"></i>
                        </div> --}}
                        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                            <h4 class="text-xl font-semibold text-gray-800">Pendirian Rumah Sakit</h4>
                            <p class="mt-4 text-gray-600">Rumah sakit kami didirikan pada tahun 1980 dengan tujuan memberikan pelayanan kesehatan terbaik kepada masyarakat.</p>
                        </div>
                    </div>
    
                    <!-- Timeline Item 2 -->
                    <div class="relative md:pl-10">
                        {{-- <div class="absolute -left-8 top-0 bg-green-600 rounded-full p-4">
                            <i class="fas fa-user-md text-white text-xl"></i>
                        </div> --}}
                        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                            <h4 class="text-xl font-semibold text-gray-800">Ekspansi Departemen</h4>
                            <p class="mt-4 text-gray-600">Pada tahun 1995, kami menambahkan departemen spesialisasi baru seperti kardiologi, bedah, dan pediatri untuk memenuhi kebutuhan masyarakat.</p>
                        </div>
                    </div>
    
                    <!-- Timeline Item 3 -->
                    <div class="relative md:pr-10">
                        {{-- <div class="absolute -left-8 top-0 bg-yellow-600 rounded-full p-4">
                            <i class="fas fa-flask text-white text-xl"></i>
                        </div> --}}
                        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                            <h4 class="text-xl font-semibold text-gray-800">Penambahan Fasilitas</h4>
                            <p class="mt-4 text-gray-600">Pada tahun 2010, kami memperluas rumah sakit dengan fasilitas laboratorium modern dan ruang ICU yang lebih lengkap.</p>
                        </div>
                    </div>
    
                    <!-- Timeline Item 4 -->
                    <div class="relative md:pl-10">
                        {{-- <div class="absolute -left-8 top-0 bg-red-600 rounded-full p-4">
                            <i class="fas fa-award text-white text-xl"></i>
                        </div> --}}
                        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                            <h4 class="text-xl font-semibold text-gray-800">Penghargaan & Akreditasi</h4>
                            <p class="mt-4 text-gray-600">Kami telah menerima berbagai penghargaan dan akreditasi nasional atas pelayanan kesehatan berkualitas tinggi yang kami berikan.</p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Link FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    


    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-6 lg:px-20">
            <!-- Title Section -->
            {{-- <div class="text-center mb-16">
                <h2 class="text-5xl font-extrabold text-gray-800">Sejarah Rumah Sakit Kami</h2>
                <p class="mt-4 text-lg text-gray-600">Mengabdi sejak tahun 1980 dengan komitmen memberikan pelayanan terbaik bagi masyarakat.</p>
            </div> --}}
    
            <!-- Timeline Section -->
            <div class="space-y-16">
                <!-- Timeline Item 1 -->
                <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                    <div class="w-full md:w-1/3">
                        {{-- <img src="{{ asset('img/sejarah-1.jpg') }}" alt="Pendirian Rumah Sakit" class="rounded-lg shadow-lg"> --}}
                        <img src="{{ asset('img/doctors/doctors-1.jpg') }}" alt="Doctor 1" class="rounded-full w-32 h-32 object-cover mb-4">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800">Pendirian Rumah Sakit (1980)</h3>
                        <p class="mt-4 text-gray-600">Rumah sakit kami didirikan pada tahun 1980 dengan visi memberikan pelayanan kesehatan terbaik bagi seluruh lapisan masyarakat. Saat itu, rumah sakit hanya memiliki dua departemen utama: umum dan gawat darurat.</p>
                    </div>
                </div>
    
                <!-- Timeline Item 2 -->
                <div class="flex flex-col md:flex-row-reverse items-start md:items-center gap-8">
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('img/sejarah-2.jpg') }}" alt="Ekspansi Departemen" class="rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800">Ekspansi Departemen (1995)</h3>
                        <p class="mt-4 text-gray-600">Pada tahun 1995, kami menambahkan beberapa departemen spesialis seperti kardiologi, ortopedi, dan pediatri. Ekspansi ini dilakukan untuk memenuhi kebutuhan masyarakat akan layanan kesehatan yang lebih spesifik.</p>
                    </div>
                </div>
    
                <!-- Timeline Item 3 -->
                <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('img/sejarah-3.jpg') }}" alt="Penambahan Fasilitas" class="rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800">Penambahan Fasilitas Modern (2010)</h3>
                        <p class="mt-4 text-gray-600">Seiring perkembangan teknologi, rumah sakit kami menambahkan fasilitas modern seperti laboratorium diagnostik canggih, ruang radiologi, dan peralatan medis terkini untuk meningkatkan kualitas pelayanan.</p>
                    </div>
                </div>
    
                <!-- Timeline Item 4 -->
                <div class="flex flex-col md:flex-row-reverse items-start md:items-center gap-8">
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('img/sejarah-4.jpg') }}" alt="Penghargaan & Akreditasi" class="rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800">Penghargaan & Akreditasi (2015)</h3>
                        <p class="mt-4 text-gray-600">Pada tahun 2015, rumah sakit kami mendapatkan akreditasi nasional serta berbagai penghargaan atas kualitas pelayanan dan inovasi di bidang kesehatan. Ini menjadi bukti nyata komitmen kami terhadap pelayanan terbaik.</p>
                    </div>
                </div>
            </div>
    
            <!-- Call to Action -->
            <div class="mt-20 text-center">
                <a href="/kontak" class="px-10 py-4 bg-blue-600 text-white text-lg font-semibold rounded-lg shadow hover:bg-blue-700 transition duration-300">
                    Hubungi Kami →
                </a>
            </div>
        </div>
    </section>

            <!-- Footer -->
            <footer class="bg-gray-900 py-8 text-center text-white">
                <p>© 2025 RS Sejahtera. All Rights Reserved.</p>
            </footer>
    
</body>

</html>
