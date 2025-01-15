<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Visi dan Misi Rumah Sakit</title>
</head>

<body class="h-full bg-gray-100">
    <div class="min-h-full">
        <!-- Navbar -->
        <x-navbar></x-navbar> <!-- Mengambil Navbar  (navbar.blade.php)-->


        <!-- Header -->
        <header class="bg-blue-700 h-screen flex items-center justify-center text-center text-white">
            <div class="space-y-6">
                <h1 class="text-5xl font-extrabold">Visi dan Misi Kami</h1>
                <p class="text-xl font-light max-w-2xl mx-auto">Kami berkomitmen untuk memberikan pelayanan kesehatan terbaik dengan profesionalisme dan empati.</p>

                <button class="pt-6">
                    <a href="#visi" id="scrollButton" class="px-6 py-3 mt-10 bg-white text-blue-700 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Selengkapnya</a>
                </button>
                
            </div>
            
        </header>

        <!-- Visi Section -->
        <section id="visi" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Visi</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Menjadi rumah sakit pilihan utama masyarakat dengan pelayanan kesehatan yang unggul, terjangkau, dan terpercaya.</p>
                <div class="mt-12 flex justify-center">
                    <img src="https://via.placeholder.com/600x300" alt="Visi" class="rounded-lg shadow-lg hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </section>

        <!-- Misi Section -->
        <section id="misi" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800">Misi</h2>
                    <p class="text-lg text-gray-600 mt-4">Misi kami adalah memberikan pelayanan kesehatan yang berkualitas tinggi dengan mengutamakan kenyamanan dan keselamatan pasien.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Misi Item 1 -->
                    <div class="p-6 bg-blue-50 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m6.938-4A8.001 8.001 0 114.062 12 8.001 8.001 0 0118.938 12z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Pelayanan Profesional</h3>
                        <p class="text-gray-600">Menyediakan pelayanan kesehatan dengan tenaga medis yang profesional dan berpengalaman.</p>
                    </div>

                    <!-- Misi Item 2 -->
                    <div class="p-6 bg-blue-50 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3 9V3m6 18H6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fasilitas Lengkap</h3>
                        <p class="text-gray-600">Menyediakan fasilitas kesehatan yang modern dan lengkap untuk berbagai kebutuhan pasien.</p>
                    </div>

                    <!-- Misi Item 3 -->
                    <div class="p-6 bg-blue-50 rounded-lg shadow-md transition duration-300 transform hover:scale-105 hover:shadow-xl">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-4.21A1 1 0 0017.647 12H6.353a1 1 0 00-.948.79L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Empati dan Peduli</h3>
                        <p class="text-gray-600">Memberikan pelayanan dengan empati dan kepedulian tinggi terhadap pasien.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontak" class="py-20 bg-blue-700 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl font-bold mb-6">Kontak Kami</h2>
                <p class="text-lg mb-6">Hubungi kami untuk informasi lebih lanjut mengenai layanan rumah sakit.</p>
                <a href="mailto:info@rssejahtera.com" class="px-6 py-3 bg-white text-blue-700 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Email Kami</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 py-8 text-center text-white">
            <p>© 2025 RS Sejahtera. All Rights Reserved.</p>
        </footer>
    </div>
</body>

<script>
    document.getElementById('scrollButton').addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah aksi default link

        const targetElement = document.querySelector('#visi');
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



</html>
