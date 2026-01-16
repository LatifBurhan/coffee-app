<section id="career" class="py-24 bg-gray-50 relative overflow-hidden">

    <div class="absolute top-0 left-0 w-64 h-64 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -translate-x-1/2 -translate-y-1/2"></div>

    <div class="container mx-auto px-6 relative z-10">

        <div class="text-center mb-16">
            <span class="text-emerald-600 font-bold tracking-widest uppercase text-xs bg-emerald-100 px-3 py-1 rounded-full mb-4 inline-block">
                Join Our Team
            </span>
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 font-sans">Grow with SARONE</h2>
            <p class="text-gray-500 max-w-xl mx-auto text-lg">
                Jadilah bagian dari revolusi kopi modern. Temukan passion Anda di sini.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($jobs as $job)
                <div class="group bg-white rounded-[2rem] p-6 shadow-sm hover:shadow-2xl hover:shadow-emerald-100/50 transition-all duration-300 border border-gray-100 flex flex-col h-full relative overflow-hidden">

                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-400 to-teal-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>

                    <div class="flex-grow">
                        <div class="flex justify-between items-start mb-6">
                            <span class="bg-emerald-50 text-emerald-700 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide border border-emerald-100">
                                {{ $job->type }}
                            </span>
                            <span class="text-gray-400 text-xs font-medium flex items-center">
                                <i class="far fa-clock mr-1.5"></i> {{ $job->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">
                            {{ $job->title }}
                        </h3>

                        <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                            {{ Str::limit($job->description, 100) }}
                        </p>
                    </div>

                    <div class="mt-auto pt-6 border-t border-gray-50">
                        <button onclick="bukaFormLamaran('{{ $job->id }}', '{{ $job->title }}')"
                            class="w-full py-3 bg-white border-2 border-emerald-600 text-emerald-600 font-bold rounded-xl hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:shadow-emerald-200 transform hover:-translate-y-1">
                            Lamar Sekarang
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6">
                        <i class="fas fa-briefcase text-3xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Belum ada lowongan dibuka</h3>
                    <p class="text-gray-500 mt-2">Pantau terus website kami untuk update selanjutnya!</p>
                </div>
            @endforelse

        </div>
    </div>
</section>

<section id="apply-section" class="hidden fixed inset-0 z-[60] overflow-y-auto bg-black/50 backdrop-blur-sm transition-all duration-500">
    <div class="min-h-screen flex items-center justify-center p-4">

        <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row relative animate-fade-in-up">

            <button onclick="tutupFormLamaran()" class="absolute top-4 right-4 z-20 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-red-100 hover:text-red-500 transition">
                <i class="fas fa-times"></i>
            </button>

            <div class="bg-emerald-900 text-white p-10 md:w-1/3 flex flex-col justify-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-500 rounded-full filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>

                <h3 class="text-3xl font-bold mb-2 relative z-10">You're Applying!</h3>
                <p class="text-emerald-200 mb-8 text-sm relative z-10">Langkah awal menuju karir impianmu.</p>

                <div class="bg-white/10 p-6 rounded-2xl border border-white/10 backdrop-blur-sm relative z-10">
                    <p class="text-xs text-emerald-200 uppercase tracking-widest mb-1">Posisi</p>
                    <h4 id="display-job-title" class="text-2xl font-bold text-white leading-tight">Posisi Pekerjaan</h4>
                </div>

                <div class="mt-8 flex items-center gap-3 text-sm text-emerald-200/80">
                    <i class="fas fa-info-circle"></i>
                    <p>Format CV wajib PDF (Max 2MB)</p>
                </div>
            </div>

            <div class="p-8 md:p-12 md:w-2/3 bg-white">
                <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <input type="hidden" name="job_id" id="input-job-id">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-5 py-3 bg-gray-50 border-0 rounded-xl focus:ring-2 focus:ring-emerald-500 outline-none transition" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">WhatsApp</label>
                            <input type="text" name="phone" required class="w-full px-5 py-3 bg-gray-50 border-0 rounded-xl focus:ring-2 focus:ring-emerald-500 outline-none transition" placeholder="08xx...">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Email Aktif</label>
                        <input type="email" name="email" required class="w-full px-5 py-3 bg-gray-50 border-0 rounded-xl focus:ring-2 focus:ring-emerald-500 outline-none transition" placeholder="email@example.com">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Upload CV (PDF)</label>
                        <div class="relative">
                            <input type="file" name="cv" accept=".pdf" required
                                class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-3 file:px-6
                                file:rounded-full file:border-0
                                file:text-sm file:font-bold
                                file:bg-emerald-50 file:text-emerald-700
                                hover:file:bg-emerald-100
                                cursor-pointer border-2 border-dashed border-gray-200 rounded-xl p-2 hover:border-emerald-300 transition">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Cover Letter (Opsional)</label>
                        <textarea name="cover_letter" rows="3" class="w-full px-5 py-3 bg-gray-50 border-0 rounded-xl focus:ring-2 focus:ring-emerald-500 outline-none transition resize-none" placeholder="Ceritakan singkat tentang dirimu..."></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-emerald-600 text-white font-bold rounded-xl shadow-lg shadow-emerald-200 hover:bg-emerald-700 hover:shadow-emerald-400 transition-all transform hover:-translate-y-1">
                            Kirim Lamaran Saya
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="track-status" class="py-24 bg-emerald-950 text-white relative overflow-hidden">

    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-emerald-900/50 rounded-full blur-[100px] mix-blend-screen opacity-50"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-teal-900/50 rounded-full blur-[100px] mix-blend-screen opacity-50"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-3xl md:text-5xl font-bold mb-6 font-sans">Track Your Application</h2>
            <p class="text-emerald-200/80 mb-10 text-lg">
                Sudah melamar? Masukkan detail Anda untuk melihat sejauh mana proses rekrutmen Anda berjalan.
            </p>

            <div class="bg-white/10 backdrop-blur-md p-2 rounded-full border border-white/20 shadow-2xl inline-block w-full max-w-2xl mx-auto mb-12">
                <form action="{{ route('career.track') }}" method="POST" class="flex flex-col md:flex-row gap-2">
                    @csrf
                    <input type="email" name="email" placeholder="Email Anda" required
                        class="flex-1 px-6 py-3 bg-transparent border-0 text-white placeholder-emerald-200/50 focus:outline-none focus:bg-white/5 rounded-full transition text-center md:text-left">

                    <div class="w-px h-8 bg-white/20 hidden md:block self-center"></div>

                    <input type="text" name="phone" placeholder="No. WhatsApp" required
                        class="flex-1 px-6 py-3 bg-transparent border-0 text-white placeholder-emerald-200/50 focus:outline-none focus:bg-white/5 rounded-full transition text-center md:text-left">

                    <button type="submit"
                        class="px-8 py-3 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-bold rounded-full transition shadow-lg shadow-emerald-500/30 flex items-center justify-center gap-2">
                        <i class="fas fa-search"></i> <span class="md:hidden">Cek Status</span>
                    </button>
                </form>
            </div>

            @if (session('error'))
                <div class="max-w-lg mx-auto mt-6 p-4 bg-red-500/20 border border-red-500/30 rounded-2xl text-red-200 backdrop-blur-sm animate-pulse">
                    <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
                </div>
            @endif
        </div>

        @if (session('track_result'))
            <div class="max-w-4xl mx-auto mt-12 animate-fade-in-up">

                @foreach (session('track_result') as $result)
                    <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">

                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 border-b border-gray-100 pb-6">
                            <div>
                                <h4 class="font-bold text-2xl text-gray-900">{{ $result->job->title ?? 'Posisi Tidak Ditemukan' }}</h4>
                                <p class="text-gray-500 mt-1 flex items-center gap-2">
                                    <i class="far fa-calendar-alt text-emerald-500"></i>
                                    Applied on {{ $result->created_at->format('d M Y') }}
                                </p>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-700 font-bold text-sm">
                                    ID: #{{ $result->id }}
                                </span>
                            </div>
                        </div>

                        @php
                            $statusMap = ['pending' => 1, 'review cv' => 1, 'wawancara' => 2, 'fgd' => 3, 'diterima' => 4, 'ditolak' => 99];
                            $currentStep = $statusMap[strtolower($result->status)] ?? 1;
                            $isRejected = $result->status == 'ditolak';
                        @endphp

                        <div class="relative px-4">
                            <div class="absolute top-1/2 left-0 w-full h-1.5 bg-gray-100 -translate-y-1/2 rounded-full"></div>

                            <div class="absolute top-1/2 left-0 h-1.5 bg-emerald-500 -translate-y-1/2 rounded-full transition-all duration-1000 shadow-[0_0_10px_rgba(16,185,129,0.5)]"
                                style="width: {{ $isRejected ? '100%' : ($currentStep == 4 ? '100%' : ($currentStep == 3 ? '75%' : ($currentStep == 2 ? '50%' : '25%'))) }}">
                            </div>

                            <div class="relative z-10 flex justify-between w-full">

                                <div class="flex flex-col items-center group">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center border-4 text-lg transition-all duration-300 bg-white
                                        {{ $currentStep >= 1 ? 'border-emerald-500 text-emerald-600 shadow-lg' : 'border-gray-200 text-gray-300' }}">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <p class="mt-4 text-xs font-bold uppercase tracking-wider {{ $currentStep >= 1 ? 'text-emerald-600' : 'text-gray-400' }}">Review CV</p>
                                </div>

                                <div class="flex flex-col items-center group">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center border-4 text-lg transition-all duration-300 bg-white
                                        {{ $currentStep >= 2 ? 'border-emerald-500 text-emerald-600 shadow-lg' : 'border-gray-200 text-gray-300' }}">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <p class="mt-4 text-xs font-bold uppercase tracking-wider {{ $currentStep >= 2 ? 'text-emerald-600' : 'text-gray-400' }}">Interview</p>
                                </div>

                                <div class="flex flex-col items-center group">
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center border-4 text-lg transition-all duration-300 bg-white
                                        {{ $currentStep >= 3 ? 'border-emerald-500 text-emerald-600 shadow-lg' : 'border-gray-200 text-gray-300' }}">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <p class="mt-4 text-xs font-bold uppercase tracking-wider {{ $currentStep >= 3 ? 'text-emerald-600' : 'text-gray-400' }}">FGD</p>
                                </div>

                                <div class="flex flex-col items-center group">
                                    @if ($isRejected)
                                        <div class="w-12 h-12 rounded-full flex items-center justify-center border-4 border-red-500 bg-red-50 text-red-500 text-lg shadow-lg">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <p class="mt-4 text-xs font-bold uppercase tracking-wider text-red-500">Failed</p>
                                    @else
                                        <div class="w-12 h-12 rounded-full flex items-center justify-center border-4 text-lg transition-all duration-300 bg-white
                                            {{ $currentStep == 4 ? 'border-emerald-500 bg-emerald-500 text-white shadow-lg shadow-emerald-200' : 'border-gray-200 text-gray-300' }}">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <p class="mt-4 text-xs font-bold uppercase tracking-wider {{ $currentStep == 4 ? 'text-emerald-600' : 'text-gray-400' }}">Hired</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 bg-gray-50 rounded-2xl p-6 text-center">
                            @if ($isRejected)
                                <h5 class="text-red-600 font-bold mb-1">Mohon Maaf</h5>
                                <p class="text-gray-500 text-sm">Kualifikasi Anda belum sesuai dengan kebutuhan kami saat ini. Tetap semangat!</p>
                            @elseif($currentStep == 4)
                                <h5 class="text-emerald-600 font-bold mb-1">Selamat Bergabung!</h5>
                                <p class="text-gray-500 text-sm">Kami tidak sabar untuk bekerja sama dengan Anda.</p>
                            @else
                                <h5 class="text-emerald-800 font-bold mb-1">Lamaran Sedang Diproses</h5>
                                <p class="text-gray-500 text-sm">Tim HR kami sedang meninjau berkas Anda. Harap cek email secara berkala.</p>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>

<script>
    function bukaFormLamaran(jobId, jobTitle) {
        // Isi Data ke Form
        document.getElementById('input-job-id').value = jobId;
        document.getElementById('display-job-title').innerText = jobTitle;

        // Tampilkan Modal dengan Animasi
        const section = document.getElementById('apply-section');
        section.classList.remove('hidden');
        // Sedikit delay agar transisi opacity berjalan jika ada class opacity di CSS
    }

    function tutupFormLamaran() {
        const section = document.getElementById('apply-section');
        section.classList.add('hidden');
    }

    // Tutup jika klik di luar modal (overlay)
    document.getElementById('apply-section').addEventListener('click', function(e) {
        if (e.target === this) {
            tutupFormLamaran();
        }
    });
</script>
