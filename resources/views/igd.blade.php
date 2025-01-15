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
    </div>


    <!-- <header class="bg-white shadow pt-16">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- <h1 class="text-3xl font-bold tracking-tight text-gray-900">IGD</h1> --}}
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Instalasi Gawat Darurat (IGD)</h2>
            {{-- <p class="mt-4">Ini adalah konten utama.</p> --}}
        </div>
    </header> -->


    <section class="bg-white py-12">
        <div class="container mx-auto px-6">
            <!-- Judul Section -->
             <h2 class="text-3xl font-bold text-center text-gray-900 mb-8 pt-16">Instalasi Gawat Darurat (IGD)</h2> 
    
            <!-- Deskripsi IGD -->
            <div class="text-center mb-12">
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Instalasi Gawat Darurat (IGD) adalah unit pelayanan medis yang berfungsi untuk menangani pasien
                    dengan kondisi gawat darurat yang membutuhkan penanganan cepat dan tepat. IGD kami siap melayani 24 jam sehari, 7 hari seminggu, dengan tim medis yang terlatih dan peralatan canggih untuk memberikan pertolongan pertama yang optimal.
                </p>
            </div>
    
            <!-- Layanan Unggulan IGD -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Penanganan Cepat dan Tepat -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-4">Penanganan Cepat dan Tepat</h3>
                    <p class="text-gray-700">
                        Tim medis kami siap memberikan pertolongan pertama pada kasus-kasus seperti kecelakaan lalu lintas, serangan jantung, stroke, dan kondisi gawat darurat lainnya.
                    </p>
                </div>
    
                <!-- Tim Medis Profesional -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-4">Tim Medis Profesional</h3>
                    <p class="text-gray-700">
                        IGD didukung oleh dokter spesialis gawat darurat, perawat, dan tenaga medis yang berpengalaman dalam menangani kondisi kritis.
                    </p>
                </div>
    
                <!-- Fasilitas Lengkap -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-4">Fasilitas Lengkap</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Ruang resusitasi dengan peralatan lengkap.</li>
                        <li>Ambulans 24 jam siap siaga.</li>
                        <li>Laboratorium darurat untuk pemeriksaan cepat.</li>
                    </ul>
                </div>
            </div>
    
            <!-- Prosedur Pelayanan IGD -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Prosedur Pelayanan IGD</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Pendaftaran -->
                    <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-blue-700 mb-2">Pendaftaran</h4>
                        <p class="text-gray-700">
                            Pasien dapat langsung mendaftar di loket IGD tanpa perlu antre panjang. Prioritas diberikan berdasarkan tingkat kegawatan.
                        </p>
                    </div>
    
                    <!-- Triase -->
                    <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-blue-700 mb-2">Triase</h4>
                        <p class="text-gray-700">
                            Tim medis akan melakukan penilaian awal (triase) untuk menentukan tingkat kegawatan pasien.
                        </p>
                    </div>
    
                    <!-- Penanganan Medis -->
                    <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-blue-700 mb-2">Penanganan Medis</h4>
                        <p class="text-gray-700">
                            Pasien akan segera ditangani oleh tim medis sesuai dengan kondisi yang dialami.
                        </p>
                    </div>
    
                    <!-- Rujukan atau Rawat Inap -->
                    <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-blue-700 mb-2">Rujukan atau Rawat Inap</h4>
                        <p class="text-gray-700">
                            Setelah penanganan awal, pasien akan dirujuk ke unit terkait atau dirawat inap jika diperlukan.
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Kapan Harus ke IGD? -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Kapan Harus ke IGD?</h3>
                <p class="text-gray-700 mb-4">
                    Anda disarankan segera datang ke IGD jika mengalami gejala atau kondisi berikut:
                </p>
                <ul class="list-disc list-inside text-gray-700 mb-8">
                    <li>Nyeri dada yang tidak tertahankan.</li>
                    <li>Sesak napas parah.</li>
                    <li>Pendarahan hebat.</li>
                    <li>Kehilangan kesadaran.</li>
                    <li>Cedera serius akibat kecelakaan.</li>
                    <li>Gejala stroke (mulut mencong, bicara tidak jelas, lemah separuh badan).</li>
                </ul>
            </div>
    
            <!-- Kontak IGD -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Kontak IGD</h3>
                <div class="text-gray-700">
                    <p><strong>Telepon Darurat:</strong> +62858 1771 0880</p>
                    <p><strong>Alamat:</strong> Jl. KS Tubun 92-94, Jakarta Barat</p>
                    <p><strong>Jam Operasional:</strong> 24 Jam Setiap Hari</p>
                </div>
            </div>
    
            <!-- Testimoni Pasien -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Testimoni Pasien</h3>
                <blockquote class="bg-blue-50 p-6 rounded-lg shadow-md text-gray-700 italic">
                    "Ketika ayah saya mengalami serangan jantung, tim IGD langsung memberikan pertolongan dengan cepat dan profesional. Terima kasih atas pelayanan yang luar biasa!" – <span class="font-semibold">Siti, Keluarga Pasien</span>
                </blockquote>
            </div>
    
            <!-- Mengapa Memilih IGD Kami? -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">Mengapa Memilih IGD Kami?</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Pelayanan cepat dan responsif.</li>
                    <li>Tim medis berpengalaman.</li>
                    <li>Fasilitas lengkap dan modern.</li>
                    <li>Sistem rujukan terintegrasi.</li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>
