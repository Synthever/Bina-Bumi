<x-auth-navbar />

<div class="@container">
    <div class="flex flex-col @md:flex-row container-layer1">
        <img src="{{ asset('img/auth/logo.png') }}" alt="Logo" class="w-40 h-60 mx-auto mt-5">
        <h1 class="text-5xl text-white text-center font-bold mt-2">Masuk</h1>
        <p class="text-2xl text-center text-white mt-2">Silahkan akses akun Anda</p>

        <div class="@container mt-8 mb-8">
            <div class="flex flex-col @md:flex-row max-w-3xl mx-auto container-layer2">

                <div class="@container mt-5">
                    <div class="flex flex-col @md:flex-row max-w-2xl mx-auto container-layer2">
                        <a accesskey="1" href="" class="flex items-center justify-center w-full h-full">
                            <div class="flex items-center space-x-4 mx-auto">
                                <img src="{{ asset('img/auth/google-logo.png') }}" alt="Google Logo" class="w-10 h-10">
                                <h3 class="text-2xl text-black">Masuk dengan Google</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <h1 class="text-2xl text-black text-center font-bold mt-8">Atau</h1>

                <!-- form using "No. Handphone" and "Password" -->
                <form method="POST" action="" class="w-full mt-8">
                    @csrf
                    <div class="space-y-8">
                        <div>
                            <label for="username" class="block text-lg font-medium text-gray-700 mb-1">Username</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username" 
                                    class="w-full h-12 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    autocomplete="username" required>
                            </div>
                            @error('username')
                                <p class="mt-1 text-sm text-red-600">//message</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-lg font-medium text-gray-700 mb-1">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" name="password" id="password" placeholder="Masukkan Password" 
                                    class="w-full h-12 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    autocomplete="current-password" required>
                            </div>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">//message</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                            </div>
                            <a href="" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                                Lupa password?
                            </a>
                        </div>

                        <button type="submit" class="w-full flex justify-center py-4 px-4 text-center border border-transparent rounded-2xl shadow-sm text-white bg-[#193D29] hover:bg-[#224b35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#193D29] text-3xl font-medium transition h-18">
                            Masuk
                        </button>

                        <!-- belum punya akun? -->
                        <div class="mt-4 text-center">
                            <p class="text-sm text-gray-700">
                                Belum punya akun? 
                                <a href="/register" class="font-medium text-blue-600 hover:text-blue-500">
                                    Daftar sekarang
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>