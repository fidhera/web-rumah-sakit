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
        {{-- <x-header>Sejarah Kami</x-header> <!-- Mengambil Header  (header.blade.php)--> --}}
    </div>

    <!-- Header -->
    <header class="bg-blue-700 h-screen flex items-center justify-center text-center text-white">
        <div class="space-y-6">
            <h1 class="text-5xl font-extrabold">Layanan Fisioterapi Terbaik</h1>
            <p class="text-xl font-light max-w-2xl mx-auto">Membantu Anda pulih dari cedera dan meningkatkan mobilitas
                tubuh dengan perawatan profesional.</p>

            <button class="pt-6">
                <a href="#services" id="scrollButton"
                    class="px-6 py-3 mt-10 bg-white text-blue-700 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Buat
                    Janji Sekarang</a>
            </button>

        </div>

    </header>

    <!-- Hero Section -->
    {{-- <section class="bg-blue-600 text-white text-center py-20">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold mb-4">Layanan Fisioterapi Terbaik</h2>
            <p class="text-xl font-light max-w-2xl mx-auto">
                Membantu Anda pulih dari cedera dan meningkatkan mobilitas tubuh dengan perawatan profesional.
            </p>
            <a href="#contact" class="mt-6 inline-block bg-white text-blue-600 px-6 py-3 rounded-full shadow-lg hover:bg-blue-500 hover:text-white transition">
                Buat Janji Sekarang
            </a>
        </div>
    </section> --}}

    <!-- Services Section -->
    <section id="services" class="py-12 bg-white mt-20 pt-20">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold mb-6">Layanan Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Rehabilitasi Cedera</h4>
                    <p>Kami membantu Anda pulih dari cedera dengan latihan yang terarah dan aman.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Terapi Postur</h4>
                    <p>Perbaiki postur tubuh Anda untuk mencegah nyeri punggung dan leher.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Terapi Pasca Operasi</h4>
                    <p>Meningkatkan pemulihan pasca operasi dengan fisioterapi intensif.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Terapi Pijat Medis</h4>
                    <p>Meredakan ketegangan otot dan mempercepat pemulihan dengan pijatan terapeutik.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Penguatan Otot</h4>
                    <p>Latihan khusus untuk meningkatkan kekuatan otot dan stabilitas tubuh.</p>
                </div>

                <!-- Card 6 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Terapi Anak</h4>
                    <p>Fisioterapi untuk anak-anak dengan gangguan tumbuh kembang atau cedera.</p>
                </div>

                <!-- Card 7 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Terapi Lansia</h4>
                    <p>Perawatan khusus untuk menjaga mobilitas dan kesehatan fisik pada lansia.</p>
                </div>

                <!-- Card 8 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Rehabilitasi Neurologis</h4>
                    <p>Terapi untuk pasien dengan gangguan saraf seperti stroke atau cedera otak.</p>
                </div>

                <!-- Card 9 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2">Manajemen Nyeri</h4>
                    <p>Program untuk membantu pasien mengelola rasa nyeri akibat cedera atau penyakit kronis.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-12 bg-gray-50">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold mb-6">Tim Ahli Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Ahli 1"
                        class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Dr. Maria Rahma</h4>
                    <p>Ahli Rehabilitasi Cedera</p>
                </div>
                <!-- Member 2 -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Ahli 2"
                        class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Dr. Ahmad Wijaya</h4>
                    <p>Ahli Terapi Postur</p>
                </div>
                <!-- Member 3 -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Ahli 3"
                        class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Dr. Sinta Dewi</h4>
                    <p>Ahli Terapi Pasca Operasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold mb-6">Hubungi Kami</h3>
            <p class="mb-4">Email: info@rssejahtera.com | Telepon: +62 812 3456 7890</p>
            <a href="mailto:info@rssejahtera.com"
                class="bg-white text-blue-600 px-6 py-3 rounded-full shadow-lg hover:bg-blue-500 hover:text-white transition">
                Kirim Email
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2025 RS Sejahtera. All Rights Reserved.</p>
    </footer>

    <script>
        document.getElementById('scrollButton').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah aksi default link

            const targetElement = document.querySelector('#services');
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
            const startPosition = window.scrollY;
            const distance = targetPosition - startPosition;
            const duration = 1000; // Durasi dalam milidetik (1 detik)
            let startTime = null;

            function animationScroll(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = ease(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animationScroll);
            }

            function ease(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animationScroll);
        });
    </script>
</body>

</html>
