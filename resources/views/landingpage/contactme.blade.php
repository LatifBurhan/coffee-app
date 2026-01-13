<section class="contact-section py-5" style="background-color: #f2e8da;" id="contactme">
    <div class="container py-lg-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <h6 class="text-uppercase fw-bold ls-2 mb-3" style="color: #c4a484; letter-spacing: 2px;">Connect</h6>
                <h2 class="display-5 fw-bold mb-4" style="font-family: 'Playfair Display', serif; color: #4a3a2e;">Contact
                    Me</h2>
                <p class="mb-5 text-muted">Ingin bekerja sama atau sekadar menyapa? Jangan ragu untuk menghubungi kami.
                    Kami selalu terbuka untuk obrolan santai di balik secangkir kopi.</p>

                <div class="d-flex mb-4">
                    <div class="contact-icon me-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Location</h6>
                        <p class="text-muted">Jl. Kopi Harapan No. 123, Jakarta Selatan</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="contact-icon me-3">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email</h6>
                        <p class="text-muted">hello@saronecoffee.com</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="contact-icon me-3">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Phone</h6>
                        <p class="text-muted">+62 812 3456 7890</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 bg-white">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control custom-input"
                                    placeholder="Nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Nomer Telephone</label>
                                <input type="text" name="hp" class="form-control custom-input"
                                    placeholder="0857..." required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Pesan</label>
                                <textarea name="pesan" class="form-control custom-input" rows="4" placeholder="Tuliskan pesan Anda..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-custom w-100 py-3 rounded-pill fw-bold">Kirim
                                    Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
