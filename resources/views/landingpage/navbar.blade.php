<nav id="navbar" class="fixed w-full z-50 top-0 transition-all duration-500 ease-in-out border-b border-transparent">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">

            <a class="flex items-center gap-2 group" href="#">
                <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-leaf text-lg"></i> </div>
                <span class="text-2xl font-bold text-emerald-950 tracking-wide font-sans group-hover:text-emerald-700 transition-colors">
                    SARONE
                </span>
            </a>

            <button id="mobile-menu-btn" class="md:hidden text-emerald-900 focus:outline-none hover:text-emerald-600 transition bg-white/50 p-2 rounded-lg backdrop-blur-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div class="hidden md:flex items-center space-x-1">
                <a class="nav-link px-5 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 transition-all duration-300" href="#home">Home</a>
                <a class="nav-link px-5 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 transition-all duration-300" href="#about">About</a>
                <a class="nav-link px-5 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 transition-all duration-300" href="#menu">Menu</a>
                <a class="nav-link px-5 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 transition-all duration-300" href="#career">Careers</a>

                <a class="ml-4 px-6 py-2.5 rounded-full text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-200 hover:shadow-emerald-300 transition-all duration-300 transform hover:-translate-y-0.5" href="#contactme">
                    Contact Us
                </a>
            </div>

        </div>

        <div id="mobile-menu" class="hidden md:hidden mt-4 bg-white/90 backdrop-blur-xl rounded-2xl p-6 absolute left-4 right-4 shadow-2xl border border-white/20 transform origin-top animate-fade-in-down">
            <ul class="flex flex-col space-y-3 text-center">
                <li><a class="block py-2 text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg font-medium transition" href="#home">Home</a></li>
                <li><a class="block py-2 text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg font-medium transition" href="#about">About</a></li>
                <li><a class="block py-2 text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg font-medium transition" href="#menu">Menu</a></li>
                <li><a class="block py-2 text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg font-medium transition" href="#career">Careers</a></li>
                <li><a class="block py-2 text-white bg-emerald-600 rounded-lg font-medium shadow-md" href="#contactme">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    // Toggle Mobile Menu
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Scroll Effect Listener
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Saat di-scroll ke bawah: Background Putih Glass + Shadow
            navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-2');
            navbar.classList.remove('py-4', 'border-transparent');
        } else {
            // Saat di paling atas: Transparan & Lebih Lebar (Spacious)
            navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-2');
            navbar.classList.add('py-4', 'border-transparent');
            // Jika ingin glass effect selalu ada tapi tipis di top:
            navbar.classList.add('bg-white/30', 'backdrop-blur-sm');
        }
    });

    // Inisialisasi state awal (agar glass effect tipis muncul di awal)
    navbar.classList.add('bg-white/30', 'backdrop-blur-sm');
</script>
