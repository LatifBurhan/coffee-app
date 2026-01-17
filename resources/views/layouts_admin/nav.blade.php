<header class="flex justify-between items-center py-4 px-8 bg-white/90 backdrop-blur-md sticky top-0 z-40 border-b border-gray-100 shadow-sm transition-all duration-300">

    <div class="flex items-center gap-4">

        <button class="md:hidden p-2 text-gray-500 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all focus:outline-none">
            <i class="fas fa-bars text-xl"></i>
        </button>

        <div>
            <h2 class="text-xl font-bold text-gray-800 tracking-tight flex items-center gap-2">
                Selamat Pagi, <span class="text-emerald-600">{{ Auth::user()->name ?? 'Admin' }}</span>
                <span class="animate-wave inline-block origin-[70%_70%]">👋</span>
            </h2>
            <p class="text-xs font-medium text-gray-400 mt-0.5">
                Have a productive day at SARONE Coffee!
            </p>
        </div>
    </div>

    <div class="flex items-center gap-6">

        <div class="hidden md:flex items-center gap-2 px-4 py-2 bg-gray-50 rounded-full border border-gray-100 text-gray-500 text-sm font-medium">
            <i class="far fa-calendar-alt text-emerald-500"></i>
            <span>{{ date('d M Y') }}</span>
        </div>

        <div class="h-8 w-px bg-gray-200 hidden md:block"></div>

        <div class="flex items-center gap-3">

            <div class="relative group cursor-pointer">
                <img class="h-10 w-10 rounded-full object-cover border-2 border-white shadow-md ring-2 ring-emerald-100 group-hover:ring-emerald-300 transition-all duration-300"
                     src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=10b981&color=fff&bold=true"
                     alt="Avatar">

                <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full ring-2 ring-white bg-green-400"></span>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="w-10 h-10 flex items-center justify-center rounded-full text-gray-400 hover:text-red-500 hover:bg-red-50 transition-all duration-300"
                        title="Keluar Aplikasi">
                    <i class="fas fa-power-off text-lg"></i>
                </button>
            </form>
        </div>

    </div>
</header>

<style>
    @keyframes wave {
        0% { transform: rotate(0.0deg) }
        10% { transform: rotate(14.0deg) }
        20% { transform: rotate(-8.0deg) }
        30% { transform: rotate(14.0deg) }
        40% { transform: rotate(-4.0deg) }
        50% { transform: rotate(10.0deg) }
        60% { transform: rotate(0.0deg) }
        100% { transform: rotate(0.0deg) }
    }
    .animate-wave {
        animation-name: wave;
        animation-duration: 2.5s;
        animation-iteration-count: infinite;
        transform-origin: 70% 70%;
        display: inline-block;
    }
</style>
