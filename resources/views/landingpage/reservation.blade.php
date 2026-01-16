<section id="reservation"
    class="py-24 bg-gradient-to-br from-emerald-50 via-white to-emerald-50 relative overflow-hidden">

    <div class="absolute top-10 left-10 w-20 h-20 bg-emerald-200 rounded-full blur-2xl opacity-40"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-teal-200 rounded-full blur-3xl opacity-40"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-start gap-16 lg:gap-24">

            <div class="lg:w-5/12 pt-10">
                <span
                    class="text-emerald-600 font-bold tracking-widest uppercase text-xs bg-emerald-100 px-3 py-1 rounded-full mb-4 inline-block">
                    Book Your Spot
                </span>

                <h2 class="text-4xl md:text-5xl font-bold font-sans mb-6 text-gray-900 leading-tight">
                    Amankan Meja <br>
                    Favorit Anda.
                </h2>

                <p class="text-gray-500 text-lg leading-relaxed mb-8">
                    Rencanakan meeting, kencan, atau waktu santai Anda tanpa khawatir kehabisan tempat. Reservasi mudah,
                    cepat, dan fleksibel.
                </p>

                <div class="space-y-4">
                    <div
                        class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-emerald-50 hover:shadow-md transition-shadow">
                        <div
                            class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 shrink-0">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <span class="font-bold text-gray-700">High-Speed WiFi Access</span>
                    </div>

                    <div
                        class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-emerald-50 hover:shadow-md transition-shadow">
                        <div
                            class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 shrink-0">
                            <i class="fas fa-wind"></i>
                        </div>
                        <span class="font-bold text-gray-700">AC & Smoking Area Available</span>
                    </div>

                    <div
                        class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-emerald-50 hover:shadow-md transition-shadow">
                        <div
                            class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 shrink-0">
                            <i class="fas fa-music"></i>
                        </div>
                        <span class="font-bold text-gray-700">Live Music (Weekend)</span>
                    </div>
                </div>
            </div>

            <div class="lg:w-7/12 w-full">
                <div
                    class="bg-white rounded-[2.5rem] shadow-2xl shadow-emerald-100/50 p-8 md:p-10 border border-gray-100 relative overflow-hidden">

                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-400 to-teal-500"></div>

                    @if (session('success'))
                        <div
                            class="bg-emerald-50 text-emerald-800 p-4 rounded-xl mb-6 border border-emerald-100 flex items-center gap-3 animate-fade-in-up">
                            <i class="fas fa-check-circle text-xl"></i>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('reservation.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">Nama
                                    Pemesan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-emerald-500"></i>
                                    </div>
                                    <input type="text" name="name" placeholder="John Doe" required
                                        class="w-full pl-11 pr-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-semibold placeholder-gray-400 focus:ring-2 focus:ring-emerald-500 focus:bg-white focus:border-transparent transition-all outline-none">
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">WhatsApp</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fab fa-whatsapp text-emerald-500 text-lg"></i>
                                    </div>
                                    <input type="number" name="phone" placeholder="08..." required
                                        class="w-full pl-11 pr-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-semibold placeholder-gray-400 focus:ring-2 focus:ring-emerald-500 focus:bg-white focus:border-transparent transition-all outline-none appearance-none">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label
                                class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">Email
                                Konfirmasi</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-emerald-500"></i>
                                </div>
                                <input type="email" name="email" placeholder="email@example.com" required
                                    class="w-full pl-11 pr-5 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-semibold placeholder-gray-400 focus:ring-2 focus:ring-emerald-500 focus:bg-white focus:border-transparent transition-all outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">Tanggal</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-calendar-alt text-emerald-500"></i>
                                    </div>
                                    <input type="date" name="date" required
                                        class="w-full pl-11 pr-4 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-bold focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all outline-none cursor-pointer"
                                        style="color-scheme: light;">
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">Jam</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-clock text-emerald-500"></i>
                                    </div>
                                    <input type="time" name="time" required
                                        class="w-full pl-11 pr-4 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-bold focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all outline-none cursor-pointer"
                                        style="color-scheme: light;">
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 ml-1">Jumlah
                                    Tamu</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user-friends text-emerald-500"></i>
                                    </div>
                                    <select name="guests" required
                                        class="w-full pl-11 pr-8 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-gray-900 font-bold focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all outline-none cursor-pointer appearance-none">
                                        <option value="" disabled selected class="text-gray-400">Pilih...</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }} Orang</option>
                                        @endfor
                                        <option value="more">Lebih dari 10</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-2xl transition-all shadow-lg shadow-emerald-200 hover:shadow-emerald-400 transform hover:-translate-y-1 flex items-center justify-center gap-2 mt-6">
                            <span>Konfirmasi Reservasi</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>

                    <div class="relative flex py-8 items-center">
                        <div class="flex-grow border-t border-gray-100"></div>
                        <span class="flex-shrink-0 mx-4 text-gray-400 text-xs font-bold uppercase tracking-wider">Cek
                            Status Booking</span>
                        <div class="flex-grow border-t border-gray-100"></div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-2 border border-gray-100">
                        <form action="{{ route('reservation.track') }}" method="POST" class="flex gap-2">
                            @csrf
                            <input type="text" name="keyword" placeholder="Masukkan Email / No. HP Anda..." required
                                class="w-full px-4 py-3 bg-transparent border-0 focus:ring-0 text-sm placeholder-gray-400 text-gray-800">

                            <button type="submit"
                                class="bg-emerald-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-emerald-700 transition shadow-md">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    @if (session('track_error'))
                        <div
                            class="mt-4 bg-red-50 text-red-600 p-4 rounded-xl text-sm text-center border border-red-100 animate-pulse">
                            <i class="fas fa-exclamation-circle mr-1"></i> {{ session('track_error') }}
                        </div>
                    @endif

                    @if (session('track_result'))
                        <div class="mt-6 space-y-3 animate-fade-in-up">
                            <div class="flex items-center justify-between border-b border-gray-100 pb-2 mb-2">
                                <h4 class="font-bold text-gray-800 text-sm">Riwayat Booking</h4>
                            </div>

                            @foreach (session('track_result') as $res)
                                <div
                                    class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4 hover:border-emerald-100 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-emerald-50 flex flex-col items-center justify-center text-emerald-700 font-bold leading-none">
                                            <span class="text-[10px] uppercase">Tgl</span>
                                            <span class="text-lg">{{ date('d', strtotime($res->date)) }}</span>
                                        </div>

                                        <div>
                                            <p class="font-bold text-gray-900 text-sm">
                                                {{ date('M Y', strtotime($res->date)) }}
                                            </p>
                                            <p class="text-xs text-gray-500 mt-0.5">
                                                <i class="far fa-clock mr-1"></i> {{ $res->time }} WIB •
                                                {{ $res->guests }} Pax
                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        @if ($res->status == 'pending')
                                            <span
                                                class="inline-flex items-center px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-xs font-bold border border-yellow-100">
                                                <span
                                                    class="w-2 h-2 rounded-full bg-yellow-400 mr-2 animate-pulse"></span>
                                                Pending
                                            </span>
                                        @elseif($res->status == 'approved')
                                            <span
                                                class="inline-flex items-center px-3 py-1 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold border border-emerald-100 shadow-sm">
                                                <i class="fas fa-check-circle mr-2"></i> Diterima
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1 bg-red-50 text-red-700 rounded-full text-xs font-bold border border-red-100">
                                                <i class="fas fa-times-circle mr-2"></i> Penuh
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>
