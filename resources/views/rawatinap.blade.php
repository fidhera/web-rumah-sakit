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
        <header class="bg-white text-blue-700 py-16 text-center mt-20 pt-20">
            <h1 class="text-5xl font-bold mt-10 pt-10">Layanan Rawat Inap</h1>
            <p class="text-lg mt-4">Kami menyediakan fasilitas rawat inap dengan kenyamanan dan pelayanan terbaik untuk
                Anda.</p>
            <a href="#rawat-inap"
                class="mt-6 inline-block px-6 py-3 bg-white text-blue-500 rounded-full shadow-md hover:bg-blue-600 hover:text-white transition">Pelajari
                Lebih Lanjut</a>
        </header>

        <!-- Rawat Inap Section -->
        <section id="rawat-inap" class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-700 mb-12">Kamar Rawat Inap</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <img src="https://th.bing.com/th/id/OIP.jWw_rogXS4AumtPFIE-D0AHaEK?rs=1&pid=ImgDetMain" alt="Kamar VIP"
                            class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Kamar VIP</h3>
                        <p>Fasilitas mewah dengan layanan premium untuk kenyamanan maksimal.</p>
                        <button
                            class="mt-4 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-600 transition">Detail</button>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <img src="https://th.bing.com/th/id/OIP.DkPabqcjAI4LovSUUOjcQAHaE8?rs=1&pid=ImgDetMain" alt="Kamar Standar"
                            class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Kamar Standar</h3>
                        <p>Fasilitas lengkap dengan harga yang terjangkau.</p>
                        <button
                            class="mt-4 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-600 transition">Detail</button>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300">
                        <img src="https://th.bing.com/th/id/OIP.-DMPybEs-g9EBWqXuscczAHaE8?rs=1&pid=ImgDetMain" alt="Kamar Ekonomi"
                            class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Kamar Ekonomi</h3>
                        <p>Pilihan kamar dengan harga hemat namun tetap nyaman.</p>
                        <button
                            class="mt-4 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-600 transition">Detail</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-700 mb-8">Pertanyaan Umum</h2>
                <div x-data="{ open: null }" class="space-y-4">
                    <div>
                        <button @click="open = open === 1 ? null : 1"
                            class="w-full bg-blue-600 text-white px-4 py-3 text-left rounded-md focus:outline-none">
                            Apa saja fasilitas di kamar VIP?
                        </button>
                        <div x-show="open === 1" class="bg-gray-100 p-4 rounded-md mt-2">
                            <p>Kamar VIP dilengkapi dengan tempat tidur premium, sofa untuk tamu, TV, kamar mandi
                                pribadi, dan layanan makanan eksklusif.</p>
                        </div>
                    </div>
                    <div>
                        <button @click="open = open === 2 ? null : 2"
                            class="w-full bg-blue-600 text-white px-4 py-3 text-left rounded-md focus:outline-none">
                            Bagaimana cara memesan kamar rawat inap?
                        </button>
                        <div x-show="open === 2" class="bg-gray-100 p-4 rounded-md mt-2">
                            <p>Anda dapat memesan kamar dengan menghubungi call center atau melalui sistem pendaftaran
                                online kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- Footer -->
        <footer id="kontak" class="bg-gray-800 text-white py-6">
            <div class="container mx-auto text-center">
                <p class="mb-4">Hubungi Kami: info@kesehatan.com | +62 812 3456 7890</p>
                <p>&copy; 2025 RS Sejahtera. All Rights Reserved.</p>
            </div>
        </footer>

        <script>
            document.getElementById('scrollButton').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah aksi default link
        
                // Elemen target
                const targetElement = document.querySelector('#rawat-inap');
                
                // Scroll ke elemen target dengan behavior "smooth"
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        </script>
        

</body>

</html>
