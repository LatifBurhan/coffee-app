<aside class="w-72 bg-emerald-950 text-white flex-shrink-0 hidden md:flex flex-col border-r border-emerald-900 relative overflow-hidden font-sans">

    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-24 -left-24 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-teal-500/5 rounded-full blur-3xl"></div>
    </div>

    <div class="p-8 flex items-center gap-3 relative z-10">
        <div class="w-10 h-10 bg-emerald-800 rounded-xl flex items-center justify-center text-emerald-400 shadow-lg shadow-emerald-900/50">
            <i class="fas fa-leaf"></i>
        </div>
        <div>
            <h1 class="text-xl font-bold tracking-wide text-white">SARONE</h1>
            <p class="text-xs text-emerald-400 uppercase tracking-widest font-semibold">Admin Panel</p>
        </div>
    </div>

    <nav class="flex-1 px-4 space-y-2 overflow-y-auto relative z-10 py-4">

        <p class="px-4 text-xs font-bold text-emerald-600 uppercase tracking-widest mb-2 mt-2">Main Menu</p>

        <a href="/"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->is('/') || request()->is('admin') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-tachometer-alt w-6 text-center mr-3 {{ request()->is('/') || request()->is('admin') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Dashboard</span>
        </a>

        <a href="/admin/menu"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->is('admin/menu*') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-mug-hot w-6 text-center mr-3 {{ request()->is('admin/menu*') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Menu Kopi</span>
        </a>

        <a href="/admin/pesan"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->is('admin/pesan*') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-envelope w-6 text-center mr-3 {{ request()->is('admin/pesan*') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Pesan Masuk</span>
        </a>

        <a href="{{ route('admin.reservations.index') }}"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->routeIs('admin.reservations.*') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-calendar-check w-6 text-center mr-3 {{ request()->routeIs('admin.reservations.*') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Data Reservasi</span>
        </a>

        <p class="px-4 text-xs font-bold text-emerald-600 uppercase tracking-widest mb-2 mt-6">Recruitment</p>

        <a href="{{ route('admin.jobs.index') }}"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->routeIs('admin.jobs.*') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-briefcase w-6 text-center mr-3 {{ request()->routeIs('admin.jobs.*') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Manage Jobs</span>
        </a>

        <a href="{{ route('admin.applications.index') }}"
           class="flex items-center px-4 py-3.5 rounded-xl transition-all duration-300 group
           {{ request()->routeIs('admin.applications.*') ? 'bg-emerald-800/50 text-white shadow-lg shadow-emerald-900/20 border border-emerald-700/50 backdrop-blur-sm' : 'text-emerald-100/70 hover:bg-emerald-900/50 hover:text-white' }}">
            <i class="fas fa-users w-6 text-center mr-3 {{ request()->routeIs('admin.applications.*') ? 'text-emerald-400' : 'text-emerald-500/70 group-hover:text-emerald-400' }}"></i>
            <span class="font-medium">Data Pelamar</span>
        </a>

    </nav>

</aside>
