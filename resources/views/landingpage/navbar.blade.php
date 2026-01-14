<nav class="fixed w-full z-50 top-0 transition-all duration-300 bg-black/20 backdrop-blur-md border-b border-white/10" id="navbar">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">

            <a class="text-2xl font-bold text-white tracking-widest font-serif flex items-center gap-2" href="#">
                <i class="fas fa-mug-hot text-orange-400"></i> SARONE
            </a>

            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none hover:text-orange-400 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div class="hidden md:flex space-x-8 items-center">
                <a class="text-white hover:text-orange-400 transition font-medium text-sm uppercase tracking-wide" href="#home">Home</a>
                <a class="text-white hover:text-orange-400 transition font-medium text-sm uppercase tracking-wide" href="#about">About</a>
                <a class="text-white hover:text-orange-400 transition font-medium text-sm uppercase tracking-wide" href="#menu">Menu</a>
                <a class="text-white hover:text-orange-400 transition font-medium text-sm uppercase tracking-wide" href="#contactme">Contact</a>
                <a class="text-white hover:text-orange-400 transition font-medium text-sm uppercase tracking-wide" href="#career">Careers</a>

                @auth
                    <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-[#4a3a2e] text-white rounded-full text-sm font-bold hover:bg-orange-700 transition">Dashboard</a>
                @else
                    <a href="#" class="px-5 py-2 border border-white text-white rounded-full text-sm font-bold hover:bg-white hover:text-black transition">Login</a>
                @endauth
            </div>

        </div>

        <div id="mobile-menu" class="hidden md:hidden mt-4 bg-black/90 rounded-xl p-4 absolute left-4 right-4 shadow-xl border border-white/10">
            <ul class="flex flex-col space-y-4 text-center">
                <li><a class="block text-white hover:text-orange-400 font-medium" href="#home">Home</a></li>
                <li><a class="block text-white hover:text-orange-400 font-medium" href="#about">About</a></li>
                <li><a class="block text-white hover:text-orange-400 font-medium" href="#menu">Menu</a></li>
                <li><a class="block text-white hover:text-orange-400 font-medium" href="#contactme">Contact</a></li>
                <li><a class="block text-white hover:text-orange-400 font-medium" href="#career">Careers</a></li>
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="block text-orange-400 font-bold">Dashboard</a></li>
                @else
                    <li><a href="#" class="block text-orange-400 font-bold">Login</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
