<section id="contactme" class="py-20 bg-[#f2e8da]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-5">
                <h6 class="uppercase font-bold tracking-[2px] mb-3 text-[#c4a484]">
                    Connect
                </h6>

                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-serif text-[#4a3a2e]">
                    Contact Me
                </h2>

                <p class="mb-10 text-gray-600 leading-relaxed">
                    Ingin bekerja sama atau sekadar menyapa? Jangan ragu untuk menghubungi kami.
                    Kami selalu terbuka untuk obrolan santai di balik secangkir kopi.
                </p>

                <div class="flex items-start mb-6">
                    <div class="w-12 h-12 flex-shrink-0 bg-white rounded-full flex items-center justify-center text-[#c4a484] shadow-sm mr-4">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                    </div>
                    <div>
                        <h6 class="font-bold text-gray-800 mb-1">Location</h6>
                        <p class="text-gray-600 text-sm">Jl. Kopi Harapan No. 123, Jakarta Selatan</p>
                    </div>
                </div>

                <div class="flex items-start mb-6">
                    <div class="w-12 h-12 flex-shrink-0 bg-white rounded-full flex items-center justify-center text-[#c4a484] shadow-sm mr-4">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <div>
                        <h6 class="font-bold text-gray-800 mb-1">Email</h6>
                        <p class="text-gray-600 text-sm">hello@saronecoffee.com</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-white rounded-full flex items-center justify-center text-[#c4a484] shadow-sm mr-4">
                        <i class="fas fa-phone-alt text-xl"></i>
                    </div>
                    <div>
                        <h6 class="font-bold text-gray-800 mb-1">Phone</h6>
                        <p class="text-gray-600 text-sm">+62 812 3456 7890</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-semibold mb-2 text-gray-700">Nama Lengkap</label>
                                <input type="text" name="nama" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c4a484] focus:border-transparent transition bg-gray-50" placeholder="Nama Anda" required>
                            </div>

                            <div>
                                <label class="block font-semibold mb-2 text-gray-700">Nomer Telephone</label>
                                <input type="text" name="hp" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c4a484] focus:border-transparent transition bg-gray-50" placeholder="0857..." required>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block font-semibold mb-2 text-gray-700">Pesan</label>
                                <textarea name="pesan" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c4a484] focus:border-transparent transition bg-gray-50" placeholder="Tuliskan pesan Anda..." required></textarea>
                            </div>

                            <div class="md:col-span-2 mt-2">
                                <button type="submit" class="w-full py-3 bg-[#4a3a2e] text-white font-bold rounded-full hover:bg-[#3d3026] transition duration-300 shadow-lg transform hover:-translate-y-1">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
