<section id="reservation" class="py-20 bg-orange-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">

            <div class="md:w-1/2">
                <h2 class="text-4xl font-bold font-serif mb-4 text-gray-800">Booking Meja Anda</h2>
                <p class="text-gray-600 mb-6">
                    Hindari antrian panjang. Reservasi tempat favorit Anda sekarang untuk acara spesial, meeting, atau sekadar nongkrong santai.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Free WiFi Super Cepat</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Ruangan AC & Smoking Area</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-orange-500"></i> Live Music (Sabtu & Minggu)</li>
                </ul>
            </div>

            <div class="md:w-1/2 bg-white p-8 rounded-3xl shadow-xl w-full relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-2 bg-orange-500"></div>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4 border border-green-200">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('reservation.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Nama Lengkap" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                        <input type="text" name="phone" placeholder="No. WhatsApp" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                    </div>

                    <input type="email" name="email" placeholder="Alamat Email" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="date" name="date" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500 text-gray-600">
                        <input type="time" name="time" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500 text-gray-600">
                        <input type="number" name="guests" placeholder="Org" min="1" max="20" required class="w-full px-4 py-3 bg-gray-50 rounded-xl border border-gray-200 focus:outline-none focus:border-orange-500">
                    </div>

                    <button type="submit" class="w-full py-4 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-xl transition shadow-lg shadow-orange-200">
                        Reservasi Sekarang
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
