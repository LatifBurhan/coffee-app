<section id="contactme" class="py-24 bg-gradient-to-br from-white via-emerald-50/50 to-white relative overflow-hidden">

    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100/40 rounded-full blur-3xl -z-10 translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-200/30 rounded-full blur-3xl -z-10 -translate-x-1/3 translate-y-1/3"></div>

    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            <div class="lg:col-span-5 space-y-8">
                <div>
                    <span class="text-emerald-600 font-bold tracking-widest uppercase text-xs bg-emerald-100 px-3 py-1 rounded-full mb-4 inline-block">
                        Get In Touch
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 font-sans leading-tight">
                        Let's Brew Something <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Together.</span>
                    </h2>
                    <p class="text-gray-500 text-lg leading-relaxed">
                        Punya pertanyaan tentang menu kami? Atau ingin bermitra? Kami siap mendengarkan sambil menikmati secangkir kopi.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-lg shadow-emerald-100 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 transform group-hover:scale-110">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h6 class="font-bold text-gray-900 text-lg">Visit Us</h6>
                            <p class="text-gray-500 text-sm group-hover:text-emerald-600 transition-colors">Jl. Kopi Harapan No. 123, Jakarta Selatan</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-lg shadow-emerald-100 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 transform group-hover:scale-110">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h6 class="font-bold text-gray-900 text-lg">Email Us</h6>
                            <p class="text-gray-500 text-sm group-hover:text-emerald-600 transition-colors">hello@saronecoffee.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div class="w-14 h-14 rounded-2xl bg-white shadow-lg shadow-emerald-100 flex items-center justify-center text-emerald-500 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 transform group-hover:scale-110">
                            <i class="fas fa-phone-alt text-xl"></i>
                        </div>
                        <div>
                            <h6 class="font-bold text-gray-900 text-lg">Call Us</h6>
                            <p class="text-gray-500 text-sm group-hover:text-emerald-600 transition-colors">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="bg-white/70 backdrop-blur-xl rounded-[2.5rem] shadow-2xl border border-white/50 p-8 md:p-12 relative overflow-hidden">

                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-200 rounded-full blur-2xl opacity-40 pointer-events-none"></div>

                    <form action="{{ route('contact.store') }}" method="POST" class="relative z-10">
                        @csrf

                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-semibold mb-2 text-gray-700 text-sm ml-1">Nama Lengkap</label>
                                    <input type="text" name="nama"
                                           class="w-full px-5 py-4 bg-gray-50/80 border-0 rounded-2xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all duration-300 shadow-inner"
                                           placeholder="John Doe" required>
                                </div>

                                <div>
                                    <label class="block font-semibold mb-2 text-gray-700 text-sm ml-1">Nomer WhatsApp</label>
                                    <input type="text" name="hp"
                                           class="w-full px-5 py-4 bg-gray-50/80 border-0 rounded-2xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all duration-300 shadow-inner"
                                           placeholder="08xx-xxxx-xxxx" required>
                                </div>
                            </div>

                            <div>
                                <label class="block font-semibold mb-2 text-gray-700 text-sm ml-1">Pesan Anda</label>
                                <textarea name="pesan" rows="4"
                                          class="w-full px-5 py-4 bg-gray-50/80 border-0 rounded-2xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all duration-300 shadow-inner resize-none"
                                          placeholder="Ceritakan apa yang bisa kami bantu..." required></textarea>
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="w-full py-4 bg-emerald-600 text-white font-bold rounded-2xl hover:bg-emerald-700 transition duration-300 shadow-lg shadow-emerald-200 flex items-center justify-center gap-2 group transform hover:-translate-y-1">
                                    <span>Kirim Pesan</span>
                                    <i class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
