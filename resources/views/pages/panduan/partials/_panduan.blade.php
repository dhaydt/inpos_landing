<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Panduan Aplikasi Sipos</h2>
            <p class="section-text">
                Aplikasi labba mudah digunakan, simak untuk panduan penggunaan
            </p>
        </div>

        <div class="row g-4">
            @foreach ($panduan as $key => $p)
            <div class="col-12 col-md-4">
                <div class="panduan-card">
                    <img src="{{ config('app.backend_url') . '/storage/' . $p->gambar }}" alt="card image"
                        class="w-full" />

                    <div class="panduan-card-body">
                        <p>Panduan Penggunaan</p>
                        <h3>{{ $p->judul }}</h3>

                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/admin.svg" alt="admin" />
                                <span>Admin</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/icons/time.svg" alt="time" />
                                <span>{{ $p->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <p>
                            {{ App\CPU\Helpers::getCharStripTags($p->konten, 50) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <button class="d-flex mx-auto mt-5 gap-3 align-items-center justify-content-center btn fs-5">
            <span>Lihat lebih banyak</span>
            <img src="assets/images/icons/down.svg" alt="down" />
        </button>
    </div>
</section>