<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title></head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4">
        <div class="max-w-7xl mx-auto text-white text-lg font-bold">RS Sejahtera - Antrian</div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">

        <!-- Success or Error Messages -->
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-3xl font-semibold text-center text-blue-600 mb-6">Daftar Antrian</h2>

        <!-- Antrian Form -->
        <form action="{{ url('/antrian') }}" method="POST" class="mb-6">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="nama_pasien" autocomplete="off"  class="block text-sm font-medium text-gray-700">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                </div>
                <div>
                    <label for="jenis_layanan" class="block text-sm font-medium text-gray-700">Jenis Layanan</label>
                    <select name="jenis_layanan" id="jenis_layanan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Gigi">Poli Gigi</option>
                        <option value="Poli Anak">Poli Anak</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Tambah Antrian</button>
                </div>
            </div>
        </form>

        <!-- Daftar Antrian -->
        <h3 class="text-xl font-semibold text-center mb-4">Antrian Saat Ini</h3>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Nomor Antrian</th>
                    <th class="px-4 py-2 border">Nama Pasien</th>
                    <th class="px-4 py-2 border">Jenis Layanan</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($antrians as $antrian)
                    <tr>
                        <td class="px-4 py-2 border">{{ $antrian->nomor_antrian }}</td>
                        <td class="px-4 py-2 border">{{ $antrian->nama_pasien }}</td>
                        <td class="px-4 py-2 border">{{ $antrian->jenis_layanan }}</td>
                        <td class="px-4 py-2 border text-center">
                            <form action="{{ url('/antrian/call-next') }}" method="POST">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">Panggil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
