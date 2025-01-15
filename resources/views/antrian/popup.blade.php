<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Tambahan untuk animasi */
        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div x-data="{ open: false, antrian: {} }" 
         @detail-modal.window="open = true; antrian = $event.detail">

        <!-- Overlay -->
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-40" x-transition.opacity></div>

        <!-- Modal -->
        <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full transform transition-transform scale-90 slide-in"
                 x-transition:enter="ease-out duration-300" 
                 x-transition:enter-start="opacity-0 scale-90" 
                 x-transition:enter-end="opacity-100 scale-100" 
                 x-transition:leave="ease-in duration-200" 
                 x-transition:leave-start="opacity-100 scale-100" 
                 x-transition:leave-end="opacity-0 scale-90">

                <h3 class="text-2xl font-semibold mb-4 text-blue-600 text-center animate-pulse">Detail Antrian</h3>
                
                <div class="space-y-3">
                    <p><strong>No Antrian:</strong> <span x-text="antrian.nomor_antrian"></span></p>
                    <p><strong>Nama Pasien:</strong> <span x-text="antrian.nama_pasien"></span></p>
                    <p><strong>Jenis Layanan:</strong> <span x-text="antrian.jenis_layanan"></span></p>
                    <p><strong>Nama Dokter:</strong> <span x-text="antrian.nama_dokter"></span></p>
                    <p><strong>Rumah Sakit:</strong> <span x-text="antrian.rumah_sakit"></span></p>
                    <p><strong>Ruangan:</strong> <span x-text="antrian.ruangan"></span></p>
                </div>

                <div class="mt-6 text-center">
                    <button @click="open = false" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-transform transform hover:scale-105">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Cek apakah ada data antrian di session
        window.onload = function () {
            @if (session('antrian_data'))
                window.dispatchEvent(new CustomEvent('detail-modal', {
                    detail: @json(session('antrian_data'))
                }));
            @endif
        }
    </script>

</body>
</html>
