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
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-orange-100 flex flex-col h-full">

                    <div class="p-8 flex-grow">
                        <div class="flex justify-between items-start mb-4">
                            <span
                                class="bg-orange-100 text-orange-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
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
                        <button onclick="bukaFormLamaran('{{ $job->id }}', '{{ $job->title }}')"
                            class="w-full block text-center bg-white border border-orange-600 text-orange-600 font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 hover:text-white transition duration-300">
                            Lamar Sekarang
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-12">
                    <div class="inline-block p-4 rounded-full bg-orange-100 mb-4">
                        <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-700">Belum ada lowongan dibuka</h3>
                    <p class="text-gray-500 mt-2">Pantau terus website kami untuk update selanjutnya!</p>
                </div>
            @endforelse

        </div>

    </div>
</section>
<section id="apply-section" class="py-20 bg-white hidden transition-all duration-500 ease-in-out">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">

            <div class="bg-[#fdf5e6] rounded-3xl shadow-xl overflow-hidden border border-orange-100 flex flex-col md:flex-row">

                <div class="bg-[#4a3a2e] text-white p-10 md:w-1/3 flex flex-col justify-center text-center md:text-left">
                    <h3 class="text-2xl font-bold font-serif mb-4">Bergabunglah!</h3>
                    <p class="text-orange-200 mb-6 text-sm">Anda akan melamar untuk posisi:</p>

                    <div class="bg-white/10 p-4 rounded-xl border border-white/20 backdrop-blur-sm">
                        <h4 id="display-job-title" class="text-xl font-bold text-white">Posisi Pekerjaan</h4>
                    </div>

                    <p class="mt-8 text-xs text-gray-400">Pastikan data yang Anda masukkan benar dan CV dalam format PDF.</p>
                </div>

                <div class="p-10 md:w-2/3">
                    <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        <input type="hidden" name="job_id" id="input-job-id">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition bg-white" placeholder="Nama Anda">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">WhatsApp / HP</label>
                                <input type="text" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition bg-white" placeholder="08...">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Email Aktif</label>
                            <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition bg-white" placeholder="nama@email.com">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Upload CV (PDF)</label>
                            <input type="file" name="cv" accept=".pdf" required class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-orange-100 file:text-orange-700
                                hover:file:bg-orange-200
                                cursor-pointer border border-gray-300 rounded-lg">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Pesan Singkat / Cover Letter</label>
                            <textarea name="cover_letter" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none transition bg-white" placeholder="Ceritakan sedikit tentang diri Anda..."></textarea>
                        </div>

                        <div class="flex items-center gap-4 mt-6">
                            <button type="submit" class="flex-1 py-3 bg-orange-600 text-white font-bold rounded-lg shadow-md hover:bg-orange-700 transition transform hover:-translate-y-1">
                                Kirim Lamaran
                            </button>
                            <button type="button" onclick="tutupFormLamaran()" class="px-6 py-3 border border-gray-300 text-gray-600 font-bold rounded-lg hover:bg-gray-100 transition">
                                Batal
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
