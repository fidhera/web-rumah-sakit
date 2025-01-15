<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>RS Sejahtera - Daftar Antrian</title>
</head>

<body class="bg-gray-50">

    <x-navbar></x-navbar>

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4">
        <div class="max-w-7xl mx-auto text-white text-lg font-bold">RS Sejahtera - Antrian</div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">

        <!-- Pesan flash sukses dan error -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {!! session('success') !!}
            </div>
        @elseif(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Daftar Antrian</h2>

        <form action="{{ route('antrian.store') }}" method="POST" id="antrianForm">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="nama_pasien" class="block text-sm font-medium text-gray-700">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="jenis_layanan" class="block text-sm font-medium text-gray-700">Jenis Layanan</label>
                    <select name="jenis_layanan" id="jenis_layanan" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option value="" selected disabled>- Pilih Jenis Layanan -</option>
                        <option value="Apotek">Apotek</option>
                        <option value="Dokter Gigi">Dokter Gigi</option>
                        <option value="Dokter Umum">Dokter Umum</option>
                        <option value="Dokter Spesialis">Dokter Spesialis</option>
                        <option value="Laboratorium">Laboratorium</option>
                    </select>
                </div>
                <div>
                    <label for="nama_dokter" class="block text-sm font-medium text-gray-700">Nama Dokter</label>
                    <input type="text" name="nama_dokter" id="nama_dokter" readonly
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="rumah_sakit" class="block text-sm font-medium text-gray-700">Nama Rumah Sakit</label>
                    <input type="text" name="rumah_sakit" id="rumah_sakit" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="text-center">
                    <button type="submit" id="submitButton"
                        class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        Tambah Antrian
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Sertakan modal di sini jika antrian berhasil ditambahkan -->
    <!-- Cek jika antrian telah berhasil ditambahkan -->
    @if (session('antrian_added'))
        <script>
            window.onload = function() {
                // Menampilkan popup setelah data berhasil disubmit
                document.querySelector('[x-data]').__x.$data.open = true;
            };
        </script>
    @endif

    <script>
        const dokterMapping = {
            "Apotek": "Tidak Ada Dokter",
            "Dokter Gigi": "dr. Paell",
            "Dokter Umum": "dr. Jojo",
            "Dokter Spesialis": "dr. Adam P.imsid",
            "Laboratorium": "Tidak Ada Dokter"
        };

        document.getElementById('jenis_layanan').addEventListener('change', function() {
            const selectedLayanan = this.value;
            const namaDokterInput = document.getElementById('nama_dokter');
            namaDokterInput.value = dokterMapping[selectedLayanan] || "";
        });
    </script>

</body>

</html>
