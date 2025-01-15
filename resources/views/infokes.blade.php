<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Informasi Kesehatan</title>
    <style>
        .navbar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-animate:active {
            transform: scale(0.95);
            transition: transform 0.1s ease;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="min-h-full">
        <!-- Navbar -->
        <x-navbar></x-navbar> <!-- Mengambil Navbar  (navbar.blade.php)-->


        <!-- Header -->
        <header class="bg-blue-700 h-screen flex items-center justify-center text-center text-white">
            <div class="space-y-6">
                <h1 class="text-5xl font-extrabold">Pentingnya Hidup Sehat</h1>
                <p class="text-xl font-light max-w-2xl mx-auto">Dapatkan informasi dan tips terbaik untuk menjaga kesehatan tubuh Anda.</p>
                <button class="pt-6">
                    <a href="#tips" id="scrollButton" class="btn-animate px-6 py-3 mt-10 bg-white text-blue-700 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Mulai Sekarang</a>
                </button>
            </div>
        </header>

        <!-- Section Informasi -->
        <section id="tips" class="py-12 bg-white">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold mb-6">Tips Kesehatan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-green-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-green-500 text-4xl mb-4">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Makan Buah & Sayur</h4>
                        <p>Konsumsilah buah dan sayuran setiap hari untuk memenuhi kebutuhan nutrisi tubuh Anda.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-blue-500 text-4xl mb-4">
                            <i class="fas fa-running"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Olahraga Rutin</h4>
                        <p>Lakukan olahraga ringan minimal 30 menit setiap hari untuk menjaga kebugaran tubuh.</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-yellow-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-yellow-500 text-4xl mb-4">
                            <i class="fas fa-mug-hot"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Cukup Istirahat</h4>
                        <p>Pastikan Anda tidur minimal 7-8 jam setiap malam untuk kesehatan mental dan fisik.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Artikel Section -->
        <section id="artikel" class="py-12 bg-gray-50">
            <div class="container mx-auto">
                <h3 class="text-3xl font-bold text-center mb-6">Artikel Kesehatan Terbaru</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://source.unsplash.com/600x400/?fitness" alt="Artikel 1" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Manfaat Yoga untuk Kesehatan</h4>
                        <p>Yoga dapat membantu meningkatkan fleksibilitas, kekuatan, dan mengurangi stres.</p>
                    </article>
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://source.unsplash.com/600x400/?healthy-food" alt="Artikel 2" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Tips Pola Makan Seimbang</h4>
                        <p>Makan dengan porsi yang tepat dan bervariasi dapat meningkatkan metabolisme tubuh.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="kontak" class="bg-gray-800 text-white py-6">
            <div class="container mx-auto text-center">
                <p class="mb-4">Hubungi Kami: info@kesehatan.com | +62 812 3456 7890</p>
                <p>&copy; 2025 RS Sejahtera. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('scrollButton').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah aksi default link

            const targetElement = document.querySelector('#tips');
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











