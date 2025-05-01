<x-home-navbar />

<div class="bg-purple">
    <header class="flex justify-between items-center p-4">
        <div class="text-lg" style="font-family: 'Poppins';">
            Hai, welcome back!<br>Pamela Tri Anjani
        </div>
        <div class="text-2xl text-orange-500">🔔</div>
    </header>
    <div class="rounded-lg overflow-hidden">
        <img src="{{ asset('img/home/banner.png') }}" alt="Banner" class="w-full">
    </div>
    <div class="flex justify-between items-center bg-gray-100 p-3 rounded-lg my-4">
        <div class="row-span-2">
            <h2 class="text-lg font-bold" style="font-family: 'Poppins';">Rp 200.000</h2>
            <p class="text-sm text-gray-500" style="font-family: 'Poppins';">200.000 Koin</p>
        </div>
        <p class="text-sm text-green-500" style="font-family: 'Poppins';">90%</p>
    </div>
    <div class="flex justify-around my-4">
        <div class="text-center">
            <img src="{{ asset('img/home/maps.png') }}" alt="Maps" class="w-12 h-12">
            <a style="font-family: 'Poppins';">Maps</a>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/home/koin.png') }}" alt="Tukar Koin" class="ml-4 w-12 h-12">
            <a style="font-family: 'Poppins';">Tukar Koin</a>
        </div>
        <div class="text-center">
            <img src="{{ asset('img/home/history.png') }}" alt="History" class="w-12 h-12">
            <a style="font-family: 'Poppins';">History</a>
        </div>
    </div>
    <div class="my-4">
        <h3 class="text-lg mb-2 text-bold" style="font-family: 'Poppins';">Ayo ikuti dan selesaikan tugas nya!</h3>
        
    </div>
    <div class="my-4">
        <h3 class="text-lg mb-2" style="font-family: 'Poppins';">terdekat</h3>
        <div class="border border-gray-300 rounded-lg p-3 mb-2" style="font-family: 'Poppins';">
            Universitas Amikom Yogyakarta
        </div>
        <div class="border border-gray-300 rounded-lg p-3" style="font-family: 'Poppins';">
            Pakuwon Mall Jogja
        </div>
    </div>
    <div class="my-4">
        <h3 class="text-lg mb-2" style="font-family: 'Poppins';">Open donasi</h3>
        <div class="border border-gray-300 rounded-lg p-3" style="font-family: 'Poppins';">
            Ayo, jadi bagian dari perubahan ini!
        </div>
    </div>
    <div class="fixed bottom-0 w-full max-w-lg bg-gray-100 flex justify-around p-4">
        <div class="text-center" style="font-family: 'Poppins';">Beranda</div>
        <div class="text-center" style="font-family: 'Poppins';">Reward</div>
        <div class="text-center" style="font-family: 'Poppins';">Scan</div>
        <div class="text-center" style="font-family: 'Poppins';">Edukasi</div>
        <div class="text-center" style="font-family: 'Poppins';">Akun</div>
    </div>
</div>

<script src="/js/sweetalert.js"></script>
<script>
    @if (session('postsuccess'))
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{ session('postsuccess') }}"
        });
    @endif

    @if (session('postfailed'))
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "error",
            title: "{{ session('postfailed') }}"
        });
    @endif
</script>



<x-home-navbar />