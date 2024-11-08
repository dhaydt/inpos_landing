<section id="perangkat">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Perangkat Kasir</h2>
            <p class="section-text">
                Perlengkapan penunjang kebutuhan aplikasi kasir
            </p>
        </div>

        <div class="row g-5">
            @foreach ($hardwares as $key => $hardware)
            <div class="col-12 col-md-4">
                <div class="perangkat-card">
                    <div class="perangkat-card-img">
                        <img src="assets/images/perangkat-1.png" alt="perangkat" />
                    </div>
                    <h3 class="fs-5">{{ $hardware->nama }}</h3>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <p class="mb-0">{{ $hardware->deskripsi }}</p>
                        <a href="#" class="btn btn-primary rounded-pill px-4 py-1">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>