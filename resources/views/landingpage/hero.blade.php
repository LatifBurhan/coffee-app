<section id="home" class="relative min-h-screen flex items-center bg-gradient-to-br from-white via-emerald-50/30 to-white pt-20 overflow-hidden">

    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-emerald-100 rounded-full blur-3xl opacity-50 z-0"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-emerald-200 rounded-full blur-3xl opacity-30 z-0"></div>

    <div class="container mx-auto px-6 relative z-10 mb-72 mt-28">
        <div class="flex flex-col-reverse md:flex-row items-center gap-12">

            <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold tracking-wide uppercase mb-2 animate-fade-in-up">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Freshly Brewed Everyday
                </div>

                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight tracking-tight animate-fade-in-up delay-100">
                    Sip the <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Future</span> of <br>
                    Modern Coffee.
                </h1>

                <p class="text-lg text-gray-500 leading-relaxed max-w-lg mx-auto md:mx-0 animate-fade-in-up delay-200">
                    Nikmati perpaduan biji kopi pilihan dengan teknologi penyeduhan modern. Rasakan sensasi clean dan fresh di setiap cup SARONE.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start pt-4 animate-fade-in-up delay-300">
                    <a href="#menu" class="group px-8 py-3.5 bg-emerald-600 text-white font-semibold rounded-full shadow-lg shadow-emerald-200 hover:shadow-emerald-400 hover:bg-emerald-700 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2">
                        Order Now
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>

                    <a href="#about" class="px-8 py-3.5 bg-white text-gray-700 border border-gray-200 font-semibold rounded-full hover:border-emerald-500 hover:text-emerald-600 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                        Learn More
                    </a>
                </div>

                <div class="pt-8 flex items-center justify-center md:justify-start gap-8 animate-fade-in-up delay-500">
                    <div>
                        <p class="text-2xl font-bold text-gray-900">15k+</p>
                        <p class="text-xs text-gray-500 uppercase tracking-wide">Happy Customers</p>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">4.9</p>
                        <p class="text-xs text-gray-500 uppercase tracking-wide">Rating Star</p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative animate-fade-in-right">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl shadow-emerald-100 transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=1000&auto=format&fit=crop"
                         alt="Modern Coffee"
                         class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>

                <div class="absolute -bottom-6 -left-6 z-20 bg-white/70 backdrop-blur-md border border-white/50 p-4 rounded-2xl shadow-xl animate-bounce-slow">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-800">100% Arabica</p>
                            <p class="text-xs text-gray-500">Locally Sourced</p>
                        </div>
                    </div>
                </div>

                <div class="absolute top-10 -right-6 z-20 bg-white/70 backdrop-blur-md border border-white/50 px-4 py-2 rounded-2xl shadow-lg flex items-center gap-2 animate-pulse-slow">
                    <div class="flex text-yellow-400 text-xs">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-700">Best Seller</span>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

</section>

<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(-5%); }
        50% { transform: translateY(5%); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 3s infinite;
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(20px);
    }
    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }
    /* Helper classes for delays */
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-500 { animation-delay: 0.5s; }
</style>
