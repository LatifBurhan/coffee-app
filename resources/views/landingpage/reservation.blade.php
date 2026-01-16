<section id="reservation" class="py-20 bg-orange-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">

            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold font-serif mb-4 text-gray-800">Booking Meja Anda</h2>
                <p class="text-gray-600 mb-6">
                    Hindari antrian panjang. Reservasi tempat favorit Anda sekarang untuk acara spesial, meeting, atau
                    sekadar nongkrong santai.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Free WiFi
                        Super Cepat</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Ruangan AC &
                        Smoking Area</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Live Music
                        (Sabtu & Minggu)</li>
                </ul>
            </div>

            <div class="md:w-1/2 bg-white p-8 rounded-3xl shadow-xl w-full relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-orange-500"></div>

                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4 border border-green-200">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('reservation.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Nama Lengkap" required
                            class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                        <input type="text" name="phone" placeholder="No. WhatsApp" required
                            class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                    </div>

                    <input type="email" name="email" placeholder="Alamat Email" required
                        class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="date" name="date" required
                            class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500 text-gray-600">
                        <input type="time" name="time" required
                            class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500 text-gray-600">
                        <input type="number" name="guests" placeholder="Org" min="1" max="20" required
                            class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-xl transition shadow-lg shadow-orange-200">
                        Reservasi Sekarang
                    </button>
                </form>
                </form>

                <div class="relative flex py-8 items-center">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span class="flex-shrink-0 mx-4 text-gray-400 text-sm">Atau Cek Status Booking</span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>

                <form action="{{ route('reservation.track') }}" method="POST" class="flex gap-2">
                    @csrf
                    <input type="text" name="keyword" placeholder="Masukkan Email / No. HP Anda..." required
                        class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500 text-sm">
                    <button type="submit"
                        class="bg-gray-800 text-white px-6 py-3 rounded-xl font-bold hover:bg-gray-900 transition">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                @if (session('track_error'))
                    <div class="mt-4 bg-red-100 text-red-700 p-3 rounded-xl text-sm text-center border border-red-200">
                        <i class="fas fa-times-circle mr-1"></i> {{ session('track_error') }}
                    </div>
                @endif

                @if (session('track_result'))
                    <div class="mt-6 space-y-3 animate-fade-in-up">
                        <h4 class="font-bold text-gray-800 border-b pb-2">Riwayat Booking Anda:</h4>

                        @foreach (session('track_result') as $res)
                            <div
                                class="bg-orange-50 p-4 rounded-xl border border-orange-100 flex justify-between items-center">
                                <div>
                                    <p class="font-bold text-gray-900 text-sm">
                                        <i class="far fa-calendar-alt mr-1 text-orange-500"></i>
                                        {{ date('d M Y', strtotime($res->date)) }}
                                    </p>
                                    <p class="text-xs text-gray-500 mt-1">
                                        Jam: {{ $res->time }} • {{ $res->guests }} Orang
                                    </p>
                                </div>

                                <div>
                                    @if ($res->status == 'pending')
                                        <span
                                            class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold border border-yellow-200">
                                            <i class="fas fa-clock mr-1"></i> Pending
                                        </span>
                                    @elseif($res->status == 'approved')
                                        <span
                                            class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold border border-green-200 shadow-sm">
                                            <i class="fas fa-check mr-1"></i> Diterima
                                        </span>
                                    @else
                                        <span
                                            class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-bold border border-red-200">
                                            <i class="fas fa-times mr-1"></i> Penuh
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
</section>
