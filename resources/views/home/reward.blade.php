<x-home-navbar />

<div class="@container px-4">
    <div class="flex flex-col @md:flex-row max-w-3xl mx-auto w-full container-layer1">
        <!-- Header -->
        <div class="w-full mt-2 mb-4 flex justify-between items-start">
            <div class="text">
                <p class="text-xl text-black">Hai, welcome back</p>
                <p class="text-xl text-black">Pamela Tri Anjani</p>
            </div>
            <p class="text-4xl text-yellow-500">🔔</p>
        </div>

        
        <div class="transparent-gasih rounded-xl p-4 w-full mt-10 mb-4">
            <!-- Konten utama di sini (misal kartu donasi dsb) -->

            <!-- Footer Navigation -->
            <div class="mt-6 border-t pt-3">
                <div class="flex justify-between px-4 py-2">
                    <!-- Beranda (Aktif) -->
                    <div class="flex flex-col items-center text-green-900">
                        <img src="{{ asset('img/home/Component.png') }}" alt="Beranda" class="h-10 w-10" style="filter: invert(48%) sepia(79%) saturate(2476%) hue-rotate(86deg) brightness(50%) contrast(119%);" />
                        <span class="text-xl mt-1 font-semibold">Beranda</span>
                        <div class="w-6 h-[3px] bg-green-900 mt-1 rounded-full"></div>
                    </div>

                    <!-- Reward -->
                    <div class="flex flex-col items-center text-gray-400">
                        <img src="{{ asset('img/home/solar_crown-bold.png') }}" alt="Reward" class="h-10 w-10" />
                        <span class="text-xl mt-1">Reward</span>
                    </div>

                    <!-- Scan -->
                    <div class="flex flex-col items-center text-gray-400">
                        <img src="{{ asset('img/home/bx_scan.png') }}" alt="Scan" class="h-10 w-10" />
                        <span class="text-xl mt-1">Scan</span>
                    </div>

                    <!-- Edukasi -->
                    <div class="flex flex-col items-center text-gray-400">
                        <img src="{{ asset('img/home/ion_book.png') }}" alt="Edukasi" class="h-10 w-10" />
                        <span class="text-xl mt-1">Edukasi</span>
                    </div>

                    <!-- Akun -->
                    <div class="flex flex-col items-center text-gray-400">
                        <img src="{{ asset('img/home/iconamoon_profile-fill.png') }}" alt="Akun" class="h-10 w-10" />
                        <span class="text-xl mt-1">Akun</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>