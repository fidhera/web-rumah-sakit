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
                <p class="text-xl font-light max-w-2xl mx-auto">Dapatkan informasi dan tips terbaik untuk menjaga
                    kesehatan tubuh Anda.</p>
                <button class="pt-6">
                    <a href="#tips" id="scrollButton"
                        class="btn-animate px-6 py-3 mt-10 bg-white text-blue-700 rounded-full shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Mulai
                        Sekarang</a>
                </button>
            </div>
        </header>

        <!-- Section Informasi -->
        <section id="tips" class="py-12 bg-white pt-20">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold mb-6 mt-20">Tips Kesehatan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-green-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-green-500 text-4xl mb-4">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Makan Buah & Sayur</h4>
                        <p>Konsumsilah buah dan sayuran setiap hari untuk memenuhi kebutuhan nutrisi tubuh Anda.</p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-blue-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-blue-500 text-4xl mb-4">
                            <i class="fas fa-running"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Olahraga Rutin</h4>
                        <p>Lakukan olahraga ringan minimal 30 menit setiap hari untuk menjaga kebugaran tubuh.</p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-yellow-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-yellow-500 text-4xl mb-4">
                            <i class="fas fa-mug-hot"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Cukup Istirahat</h4>
                        <p>Pastikan Anda tidur minimal 7-8 jam setiap malam untuk kesehatan mental dan fisik.</p>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="bg-red-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-red-500 text-4xl mb-4">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Periksa Kesehatan Secara Berkala</h4>
                        <p>Lakukan pemeriksaan kesehatan secara rutin untuk mendeteksi dini penyakit dan menjaga kondisi
                            tubuh tetap optimal.</p>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-purple-500 text-4xl mb-4">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Minum Air yang Cukup</h4>
                        <p>Pastikan Anda mengonsumsi minimal 8 gelas air setiap hari untuk menjaga hidrasi tubuh dan
                            memperlancar metabolisme.</p>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="bg-teal-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-teal-500 text-4xl mb-4">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Kelola Stres dengan Baik</h4>
                        <p>Stres yang berlebihan dapat mempengaruhi kesehatan fisik dan mental. Luangkan waktu untuk
                            relaksasi dan melakukan hal-hal yang Anda sukai.</p>
                    </div>
                    <!-- Card 7 -->
                    <div
                        class="bg-indigo-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-indigo-500 text-4xl mb-4">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Jaga Postur Tubuh</h4>
                        <p>Saat bermain game, pastikan Anda duduk dengan postur yang benar untuk menghindari masalah
                            pada tulang belakang dan leher.</p>
                    </div>

                    <!-- Card 8 -->
                    <div
                        class="bg-pink-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-pink-500 text-4xl mb-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Beri Waktu Istirahat</h4>
                        <p>Batasi waktu bermain game dan beri jeda istirahat setiap 1-2 jam untuk menjaga kesehatan mata
                            dan tubuh.</p>
                    </div>

                    <!-- Card 9 -->
                    <div
                        class="bg-orange-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <div class="text-orange-500 text-4xl mb-4">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Konsumsi Camilan Sehat</h4>
                        <p>Hindari camilan tidak sehat saat bermain game. Pilih camilan seperti buah atau kacang untuk
                            energi yang lebih baik.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Artikel Section -->
        <section id="artikel" class="py-12 bg-gray-50">
            <div class="container mx-auto">
                <h3 class="text-3xl font-bold text-center mb-6">Artikel Kesehatan Terbaru</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Artikel 1 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://plus.unsplash.com/premium_photo-1661777196224-bfda51e61cfd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8eW9nYXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Artikel 1" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Manfaat Yoga untuk Kesehatan</h4>
                        <p>Yoga dapat membantu meningkatkan fleksibilitas, kekuatan, dan mengurangi stres.</p>
                    </article>

                    <!-- Artikel 2 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Artikel 2" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Tips Pola Makan Seimbang</h4>
                        <p>Makan dengan porsi yang tepat dan bervariasi dapat meningkatkan metabolisme tubuh.</p>
                    </article>

                    <!-- Artikel 3 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1584636633449-6135be6c4169?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWVudGFsJTIwaGVhbHRofGVufDB8fDB8fHww"
                            alt="Artikel 3" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Pentingnya Kesehatan Mental</h4>
                        <p>Kesehatan mental sama pentingnya dengan kesehatan fisik untuk menjalani hidup yang seimbang.
                        </p>
                    </article>

                    <!-- Artikel 4 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://plus.unsplash.com/premium_photo-1682096640844-1ae5381c5580?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cXVhbGl0eSUyMHNsZWVwfGVufDB8fDB8fHww"
                            alt="Artikel 4" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Tips Tidur Berkualitas</h4>
                        <p>Tidur yang cukup dan berkualitas membantu meningkatkan daya tahan tubuh serta fokus.</p>
                    </article>

                    <!-- Artikel 5 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://plus.unsplash.com/premium_photo-1661397109296-577ffccaf0ab?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZHJpbmslMjB3YXRlcnxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Artikel 5" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Manfaat Minum Air Putih</h4>
                        <p>Mengonsumsi air putih yang cukup setiap hari sangat penting untuk menjaga hidrasi tubuh.</p>
                    </article>

                    <!-- Artikel 6 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://plus.unsplash.com/premium_photo-1672862923459-536ab8b1372e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zml0bmVzfGVufDB8fDB8fHww"
                            alt="Artikel 6" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Olahraga untuk Kesehatan Jantung</h4>
                        <p>Melakukan olahraga teratur dapat membantu menjaga kesehatan jantung dan meningkatkan stamina.
                        </p>
                    </article>

                    <!-- Artikel 7 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://media.istockphoto.com/id/1129673037/photo/sports-woman-weighing-with-healthy-food-around.webp?a=1&b=1&s=612x612&w=0&k=20&c=GsR9WnmvqCzeW1MI0rOyQqZ_8MTEiwDzwndja93RC4o="
                            alt="Artikel 7" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Mengatur Pola Makan Diet</h4>
                        <p>Diet sehat bukan berarti mengurangi makan, tetapi memilih makanan bergizi dan seimbang.</p>
                    </article>

                    <!-- Artikel 8 -->
                    <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://media.istockphoto.com/id/1362328463/photo/worried-young-asian-man-with-his-hand-on-head-using-laptop-computer-at-home-looking-concerned.webp?a=1&b=1&s=612x612&w=0&k=20&c=pxyqY6o50FI-VD3FtCClIbXDKpDZeHSjpg-NsqyepNc="
                            alt="Artikel 8" class="rounded-md mb-4">
                        <h4 class="text-xl font-semibold mb-2">Mengelola Stres dengan Baik</h4>
                        <p>Mengelola stres dengan baik sangat penting untuk menjaga keseimbangan emosional dan
                            kesehatan.</p>
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
        document.getElementById('scrollButton').addEventListener('click', function(event) {
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
