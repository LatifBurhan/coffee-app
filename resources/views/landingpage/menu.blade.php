<section class="menu-section py-5" style="background-color: #fdf5e6;" id="menu">
    <div class="container py-lg-5">
        <div class="row g-4">

            @foreach($menu_kopi as $menu)
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden menu-card">
                    <img src="{{ asset('images/' . $menu->gambar) }}"
                         class="card-img-top"
                         alt="{{ $menu->nama_menu }}"
                         style="height: 250px; object-fit: cover;">

                    <div class="card-body p-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="fw-bold mb-0">{{ $menu->nama_menu }}</h4>
                            <span class="text-orange-600 fw-bold text-success">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        </div>
                        <p class="text-muted small">{{ $menu->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Jika database kosong, tampilkan pesan ini --}}
            @if($menu_kopi->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted">Maaf, belum ada menu tersedia saat ini.</p>
                </div>
            @endif

        </div>
    </div>
</section>
