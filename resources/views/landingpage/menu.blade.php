<section id="menu" class="py-20 bg-[#fdf5e6]">
    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($menu_kopi as $menu)
            <div class="bg-white rounded-3xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden group h-full flex flex-col border border-orange-50">

                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/' . $menu->gambar) }}"
                         alt="{{ $menu->nama_menu }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500 ease-in-out">

                    <div class="absolute bottom-0 right-0 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-tl-2xl text-orange-700 font-bold shadow-sm">
                        Rp {{ number_format($menu->harga, 0, ',', '.') }}
                    </div>
                </div>

                <div class="p-6 flex flex-col flex-grow">
                    <div class="mb-3">
                        <h4 class="text-xl font-bold text-gray-800 mb-1 group-hover:text-orange-700 transition-colors">
                            {{ $menu->nama_menu }}
                        </h4>
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                        {{ $menu->deskripsi }}
                    </p>

                    <button class="w-full py-2 border border-[#4a3a2e] text-[#4a3a2e] rounded-lg hover:bg-[#4a3a2e] hover:text-white transition font-semibold text-sm">
                        Lihat Detail
                    </button>
                </div>
            </div>
            @endforeach

            {{-- Jika database kosong --}}
            @if($menu_kopi->isEmpty())
                <div class="col-span-1 md:col-span-2 lg:col-span-4 text-center py-12">
                    <div class="inline-block p-4 rounded-full bg-orange-100 mb-4">
                        <i class="fas fa-coffee text-4xl text-orange-400"></i>
                    </div>
                    <p class="text-gray-500 text-lg">Maaf, belum ada menu tersedia saat ini.</p>
                </div>
            @endif

        </div>
    </div>
</section>
