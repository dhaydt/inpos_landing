<section class="section" id="multi">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Multi Aplikasi</h2>
            <p class="section-text">
                Beragam Aplikasi menjadi kemudahan untuk semua akses labba
            </p>
        </div>

        <div class="row g-4">
            @foreach ($multi as $key => $m)
            <div class="col-md-4 d-flex flex-column align-items-center text-center">
                <img src="assets/images/multi-app1.png" class="mx-auto" alt="multi aplikasi" />
                <h3 class="fs-4 mt-3 text-center mb-4">{{ $m->judul }}</h3>
                <p>
                    {!! $m->konten !!}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>