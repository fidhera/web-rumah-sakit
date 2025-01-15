<nav class="bg-blue-500 fixed top-0 left-0 w-full z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center position-sticky">
                <div class="shrink-0">
                    <a href="/">
                        <img src="{{ asset('img/logo-ug.png') }}" alt="Logo UG" class="h-8 w-auto">
                    </a>

                    {{-- <img class="size-8"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                        src="/resources/img/logo-ug.png"
                        alt="Your Company"> --}}
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Tautan Beranda -->
                        <a href="/"
                            class="{{ request()->is('/') ? 'bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium' : 'bg-blue-500 text-white rounded-md px-3 py-2 text-sm font-medium'}}
                            rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 hover:text-white transition duration-300 ease-in-out
"
                            aria-current="page">Beranda</a>

                        <!-- Dropdown Tentang Kami -->
                        <div class="relative group">
                            <div
                                class="{{ request()->is('sejarah', 'visimisi', 'infokes') ? 'bg-blue-700 text-gray-700' : 'bg-blue-500 text-white' }} peer flex items-center rounded-md px-3 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 group-hover:bg-blue-700 cursor-pointer transition duration-300 ease-in-out">
                                <span>Tentang Kami</span>
                                <svg class="ml-1 h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <!-- Menu Dropdown -->
                            <div
                                class="absolute left-0 hidden w-48 bg-white text-gray-700 shadow-lg group-hover:block transition duration-500 ease-in-out">
                                <a href="/sejarah" class="{{ request()->is('sejarah') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Sejarah</a>
                                <a href="/visimisi" class="{{ request()->is('visimisi') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Visi
                                    Misi</a>
                                <a href="/infokes" class="{{ request()->is('infokes') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Informasi
                                    Kesehatan</a>
                            </div>
                        </div>

                        <!-- Dropdown Pelayanan -->
                        <div class="relative group">
                            <div
                                class="{{ request()->is('igd', 'apotek', 'dokter-gigi', 'dokter-umum', 'dokter-spesialis', 'lab-lengkap') ? 'bg-blue-700 text-gray-700' : 'bg-blue-500 text-white' }} peer flex items-center rounded-md px-3 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 group-hover:bg-blue-700 cursor-pointer transition duration-300 ease-in-out">
                                <span>Pelayanan</span>
                                <svg class="ml-1 h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <!-- Menu Dropdown -->
                            <div
                                class="absolute left-0 hidden w-48 bg-white text-gray-700 shadow-lg group-hover:block transition duration-500 ease-in-out">
                                <a href="/igd" class="{{ request()->is('igd') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">IGD</a>
                                <a href="/apotek" class="{{ request()->is('apotek') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Apotek</a>
                                <a href="/dokter-gigi" class="{{ request()->is('dokter-gigi') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Dokter
                                    Gigi</a>
                                <a href="/dokter-umum" class="{{ request()->is('dokter-umum') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Dokter
                                    Umum</a>
                                <a href="/dokter-spesialis" class="{{ request()->is('dokter-spesialis') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Dokter
                                    Spesialis</a>
                                <a href="/lab-lengkap" class="{{ request()->is('lab-lengkap') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Laboratorium
                                    Lengkap</a>
                            </div>
                        </div>

                        <!-- Dropdown Layanan Reguler -->
                        <div class="relative group">
                            <div
                                class="{{ request()->is('rawat-inap', 'fisioterapi', 'kamar-operasi', 'instalasi-farmasi', 'layanan-rawat-intensif') ? 'bg-blue-700 text-gray-700' : 'bg-blue-500 text-white' }} peer flex items-center rounded-md px-3 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-700 group-hover:bg-blue-700 cursor-pointer transition duration-300 ease-in-out">
                                <span>Layanan Reguler</span>
                                <svg class="ml-1 h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <!-- Menu Dropdown -->
                            <div
                                class="absolute left-0 hidden w-48 bg-white text-gray-700 shadow-lg group-hover:block transition duration-500 ease-in-out">
                                <a href="/rawat-inap" class="{{ request()->is('rawat-inap') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Rawat
                                    Inap</a>
                                <a href="/fisioterapi"
                                    class="{{ request()->is('fisioterapi') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Fisioterapi</a>
                                <a href="/kamar-operasi" class="{{ request()->is('kamar-operasi') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Kamar
                                    Operasi</a>
                                <a href="/instalasi-farmasi" class="{{ request()->is('instalasi-farmasi') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Instalasi
                                    Farmasi</a>
                                <a href="/layanan-rawat-intensif" class="{{ request()->is('layanan-rawat-intensif') ? 'bg-blue-300 text-gray-700' : 'bg-white text-gray-700' }} block px-4 py-2 text-sm hover:bg-blue-300 transition duration-300 ease-in-out">Layanan
                                    Rawat Intensif</a>
                            </div>
                        </div>

                        <a href="/tentang"
                        class="{{ request()->is('tentang') ? 'bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium' : 'bg-blue-500 text-white rounded-md px-3 py-2 text-sm font-medium'}}
                        rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 hover:text-white transition duration-300 ease-in-out
">Tentang</a>
                        <a href="/kontak"
                        class="{{ request()->is('kontak') ? 'bg-blue-700 text-white rounded-md px-3 py-2 text-sm font-medium' : 'bg-blue-500 text-white rounded-md px-3 py-2 text-sm font-medium'}}
                        rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 hover:text-white transition duration-300 ease-in-out
">Kontak</a>
                    </div>
                </div>
            </div>



            <div class="md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon hamburger -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Icon close -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-4 py-2">
            <!-- Tautan Beranda -->
            <a href="/"
                class="block rounded-md bg-blue-700 px-3 py-2 text-base font-medium text-white">Beranda</a>

            <!-- Dropdown Tentang Kami -->
            <div @click="dropdown1 = !dropdown1"
                class="cursor-pointer flex items-center justify-between rounded-md px-3 py-2 text-base font-medium text-white bg-blue-700 hover:bg-blue-800">
                <span>Tentang Kami</span>
                <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div x-show="dropdown1" class="space-y-1 px-4 py-2 bg-white rounded-md shadow-lg">
                <a href="/sejarah" class="block text-sm text-gray-700 hover:bg-blue-300">Sejarah</a>
                <a href="/visimisi" class="block text-sm text-gray-700 hover:bg-blue-300">Visi Misi</a>
                <a href="/infokes" class="block text-sm text-gray-700 hover:bg-blue-300">Informasi
                    Kesehatan</a>
            </div>

            <!-- Dropdown Pelayanan -->
            <div @click="dropdown2 = !dropdown2"
                class="cursor-pointer flex items-center justify-between rounded-md px-3 py-2 text-base font-medium text-white bg-blue-700 hover:bg-blue-800">
                <span>Pelayanan</span>
                <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div x-show="dropdown2" class="space-y-1 px-4 py-2 bg-white rounded-md shadow-lg">
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">IGD</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Apotek</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Dokter Gigi</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Dokter Umum</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Dokter Spesialis</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Laboratorium
                    Lengkap</a>
            </div>

            <!-- Dropdown Layanan Reguler -->
            <div @click="dropdown3 = !dropdown3"
                class="cursor-pointer flex items-center justify-between rounded-md px-3 py-2 text-base font-medium text-white bg-blue-700 hover:bg-blue-800">
                <span>Layanan Reguler</span>
                <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div x-show="dropdown3" class="space-y-1 px-4 py-2 bg-white rounded-md shadow-lg">
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Rawat Inap</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Fisioterapi</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Kamar Operasi</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Instalasi Farmasi</a>
                <a href="#" class="block text-sm text-gray-700 hover:bg-blue-300">Layanan Rawat
                    Intensif</a>
            </div>
        </div>
    </div>
</nav>