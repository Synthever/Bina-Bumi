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

        <!-- Banner + Koin -->
        <div class="relative w-full">
            <!-- Banner -->
            <img src="{{ asset('img/home/banner.png') }}" alt="banner" class="w-full h-auto rounded-xl object-cover" />

            <!-- Kartu Koin -->
            <div class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-white rounded-xl shadow-lg px-6 py-4 flex items-center justify-between space-x-6 w-[90%]">
                <!-- Info Koin -->
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('img/home/koin.png') }}" alt="coin" class="w-16 h-16" />
                    <div class="text-left">
                        <p class="text-lg font-bold text-gray-800">Rp 1.000</p>
                        <p class="text-sm text-gray-600">20 koin</p>
                    </div>
                </div>

                <!-- Persentase -->
                <div class="bg-green-100 text-green-600 text-base font-semibold rounded-full px-4 py-2">
                    90%
                </div>
            </div>
        </div>

       <!-- Menu -->
        <div class="flex justify-center gap-x-20 mt-20">
            <!-- Menu Item -->
            <div class="flex flex-col items-center space-y-2">
                <div class="bg-pink-100 p-4 rounded-full">
                    <img src="{{ asset('img/home/maps.png') }}" alt="maps" class="w-14 h-14 object-contain" />
                </div>
                <span class="bg-orange-100 text-sm text-gray-800 rounded-full px-3 py-1">Maps</span>
            </div>

            <!-- koin -->
            <div class="flex flex-col items-center space-y-2">
                <div class="bg-pink-100 p-4 rounded-full">
                    <img src="{{ asset('img/home/tukar_koin.png') }}" alt="tukar koin" class="w-14 h-14 object-contain" />
                </div>
                <span class="bg-orange-100 text-sm text-gray-800 rounded-full px-3 py-1">Tukar Koin</span>
            </div>

            <div class="flex flex-col items-center space-y-2">
                <div class="bg-pink-100 p-4 rounded-full">
                    <img src="{{ asset('img/home/history.png') }}" alt="history" class="w-14 h-14 object-contain" />
                </div>
                <span class="bg-orange-100 text-sm text-gray-800 rounded-full px-3 py-1">History</span>
            </div>
        </div>

        <!-- Konten Challenge -->
        <div class="mt-10">
            <div class="flex justify-between items-center mb-4">
                <p class="text-lg font-semibold">Ayo ikuti dan selesaikan tugasnya!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                
                <!-- Card 1 -->
                <div class="relative rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('img/home/news1.png') }}" alt="Challenge 1" class="w-full h-48 object-cover" />
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#064e3b] to-transparent p-4">
                        <p class="text-sm text-white font-medium mb-2">Dapatkan 100 botol dalam 3 hari dan dapatkan bonus 10 koin</p>
                        <button class="bg-white text-[#064e3b] text-sm px-3 py-1 rounded-full">Mulai</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('img/home/news2.png') }}" alt="Challenge 2" class="w-full h-48 object-cover" />
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#064e3b] to-transparent p-4">
                        <p class="text-sm text-white font-medium mb-2">Kumpulkan lebih banyak botol dalam seminggu dan dapatkan hadiah nya</p>
                        <button class="bg-white text-[#064e3b] text-sm px-3 py-1 rounded-full">Mulai</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('img/home/news3.png') }}" alt="Challenge 3" class="w-full h-48 object-cover" />
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#064e3b] to-transparent p-4">
                        <p class="text-sm text-white font-medium mb-2">Ikuti tantangan mingguan dan menangkan poin tambahan!</p>
                        <button class="bg-white text-[#064e3b] text-sm px-3 py-1 rounded-full">Mulai</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Card donasi section -->
        <div class="bg-white rounded-xl shadow-md p-4 w-full mt-10 mb-20">
            <h2 class="text-lg font-semibold mb-3 text-gray-800">Open donasi</h2>

            <div class="rounded-xl overflow-hidden shadow w-full">
                <!-- Gambar -->
                <img src="{{ asset('img/home/donasi.png') }}" alt="Donasi" class="w-full object-cover" />

                <!-- Konten -->
                <div class="bg-white p-4">
                    <h3 class="text-base font-bold text-gray-800 mb-1">Ayo, jadi bagian dari perubahan ini!</h3>
                    <p class="text-sm text-gray-700 mb-2">✨ Setiap botol yang kita kumpulkan adalah langkah kecil menuju perubahan besar.</p>

                    <div class="text-xs text-blue-500 mb-3 space-x-2">
                        <span>#BinaBumi</span>
                        <span>#KurangiSampahPlastik</span>
                        <span>#SaveOurPlanet</span>
                    </div>

                    <button class="bg-green-700 hover:bg-green-800 text-white text-sm px-4 py-1 rounded-full">Lihat detail</button>
                </div>

                <!-- Progress Bar -->
                <div class="px-4 pb-4 pt-2">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 25%"></div>
                    </div>
                    <div class="flex justify-between text-sm font-medium text-gray-700">
                        <div class="flex">
                            <span class="text-green-700">Rp 24.000.000</span>
                            <span> dari Rp 100.000.000 terkumpul</span>
                        </div>
                        <span class="text-black">25%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
