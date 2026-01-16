<section id="menu" class="py-24 bg-gray-50 relative">

    <div class="container mx-auto px-6 mb-12 text-center">
        <span class="text-emerald-600 font-bold tracking-widest uppercase text-xs bg-emerald-100 px-3 py-1 rounded-full">
            Our Favorites
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4 font-sans">
            Special Brews for You
        </h2>
    </div>

    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($menu_kopi as $menu)
            <div class="group relative bg-white rounded-[2rem] p-3 shadow-sm hover:shadow-2xl hover:shadow-emerald-100/50 transition-all duration-500 border border-gray-100 flex flex-col h-full">

                <div class="relative h-64 w-full overflow-hidden rounded-[1.5rem]">

                    <img src="{{ asset('images/' . $menu->gambar) }}"
                         alt="{{ $menu->nama_menu }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full shadow-lg border border-white/50">
                        <span class="text-emerald-700 font-bold text-sm">
                            Rp {{ number_format($menu->harga, 0, ',', '.') }}
                        </span>
                    </div>

                    <button class="absolute bottom-3 right-3 w-10 h-10 bg-emerald-600 text-white rounded-full flex items-center justify-center shadow-lg transform translate-y-12 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-emerald-700 focus:outline-none">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>

                <div class="pt-5 px-2 pb-2 flex-grow flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-emerald-600 transition-colors line-clamp-1">
                            {{ $menu->nama_menu }}
                        </h4>
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-2 mb-2 flex-grow">
                        {{ $menu->deskripsi }}
                    </p>

                    <div class="flex items-center gap-1 mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <span class="text-xs text-gray-400 font-medium">4.8 (120 reviews)</span>
                    </div>
                </div>

            </div>
            @endforeach

            {{-- State Kosong --}}
            @if($menu_kopi->isEmpty())
                <div class="col-span-1 md:col-span-2 lg:col-span-4 text-center py-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-emerald-50 mb-6 animate-bounce">
                        <i class="fas fa-mug-hot text-3xl text-emerald-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Menu Belum Tersedia</h3>
                    <p class="text-gray-500 mt-2">Nantikan racikan kopi terbaik kami segera.</p>
                </div>
            @endif

        </div>
    </div>
</section>
