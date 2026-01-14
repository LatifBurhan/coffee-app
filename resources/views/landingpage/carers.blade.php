<section id="career" class="py-20 bg-orange-50">
    <div class="container mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Bergabung Bersama Kami</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Jadilah bagian dari cerita kami. Temukan posisi yang sesuai dengan passion Anda di dunia kopi.
            </p>
            <div class="w-24 h-1 bg-orange-600 mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($jobs as $job)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-orange-100 flex flex-col h-full">

                    <div class="p-8 flex-grow">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-orange-100 text-orange-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                {{ $job->type }}
                            </span>
                            <span class="text-gray-400 text-xs">
                                <i class="far fa-clock mr-1"></i> {{ $job->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-orange-600 transition-colors">
                            {{ $job->title }}
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ Str::limit($job->description, 100) }}
                        </p>
                    </div>

                    <div class="p-6 bg-gray-50 border-t border-gray-100 mt-auto">
                        <button onclick="document.getElementById('apply-form-section').scrollIntoView({behavior: 'smooth'});"
                           class="w-full block text-center bg-white border border-orange-600 text-orange-600 font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 hover:text-white transition duration-300">
                            Lamar Sekarang
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-12">
                    <div class="inline-block p-4 rounded-full bg-orange-100 mb-4">
                        <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-700">Belum ada lowongan dibuka</h3>
                    <p class="text-gray-500 mt-2">Pantau terus website kami untuk update selanjutnya!</p>
                </div>
            @endforelse

        </div>

    </div>
</section>
