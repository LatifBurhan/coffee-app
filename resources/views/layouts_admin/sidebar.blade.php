<aside class="w-64 bg-orange-900 text-white flex-shrink-0 hidden md:flex flex-col">
    <div class="p-6 text-2xl font-bold border-b border-orange-800">☕ Coffee Admin</div>
    <nav class="flex-1 mt-4">
        <a href="/" class="block py-2.5 px-4 hover:bg-orange-800">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
        </a>
        <a href="/admin/menu" class="block py-2.5 px-4 hover:bg-orange-800">
            <i class="fas fa-coffee mr-2"></i> Menu Kopi
        </a>
        <a href="/admin/pesan" class="block py-2.5 px-4 hover:bg-orange-800">
            <i class="fas fa-coffee mr-2"></i> pesan
        </a>
        <a href="{{ route('admin.jobs.index') }}"
            class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.jobs.*') ? 'bg-orange-800 text-white shadow-lg' : 'hover:bg-orange-800 hover:text-white text-gray-200' }}">
            <i class="fas fa-briefcase mr-2 w-6 text-center"></i> Management Jobs
        </a>
        <a href="{{ route('admin.applications.index') }}"
            class="block py-2.5 px-4 hover:bg-orange-800 {{ request()->routeIs('admin.applications.*') ? 'bg-orange-800' : '' }}">
            <i class="fas fa-users mr-2"></i> Data Pelamar
        </a>
        <a href="{{ route('admin.reservations.index') }}"
            class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.reservations.*') ? 'bg-orange-800 text-white shadow-lg' : 'hover:bg-orange-800 hover:text-white text-gray-200' }}">
            <i class="fas fa-calendar-alt mr-2 w-6 text-center"></i> Data Reservasi
        </a>
    </nav>
</aside>
