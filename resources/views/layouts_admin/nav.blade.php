<header class="flex justify-between items-center p-4 bg-white shadow-sm sticky top-0 z-50">

    <div class="flex items-center">
        <button class="md:hidden text-gray-600 mr-4 focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}!
            </h2>
            <p class="text-xs text-gray-500">Have a good day at Sarone Coffee</p>
        </div>
    </div>

    <div class="flex items-center space-x-4">

        <span class="text-gray-500 text-sm hidden md:block font-medium">
            {{ date('d M Y') }}
        </span>

        <img class="h-10 w-10 rounded-full border-2 border-orange-500 shadow-sm"
             src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=f97316&color=fff"
             alt="Avatar">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-gray-400 hover:text-red-600 transition duration-200 p-2 rounded-full hover:bg-red-50" title="Keluar Aplikasi">
                <i class="fas fa-sign-out-alt text-xl"></i>
            </button>
        </form>

    </div>
</header>
