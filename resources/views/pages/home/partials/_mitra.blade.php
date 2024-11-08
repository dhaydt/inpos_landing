<section id="partners" class="section bg-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Teman Sipos</h2>
            <p class="section-subtitle">
                Mereka yang telah percaya menggunakan aplikasi Sipos
            </p>
        </div>

        <div id="carouselPartners" class="carousel slide">
            <div class="carousel-indicators">
                @foreach ($mitras as $key => $chunk_mitra)
                    <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="{{ $key }}"
                        @if ($key == 0) class="active" @endif aria-current="true"
                        aria-label="Slide {{ $key + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($mitras as $key => $chunk_mitra)
                    <div class="carousel-item @if ($key == 0) active @endif">
                        <div class="row gy-3 align-items-center mb-5">
                            @foreach ($chunk_mitra as $key => $mitra)
                                <div class="col-6 col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="{{ config('app.backend_url') . '/storage/' . $mitra->gambar }}"
                                        class="img-fluid" alt="{{ $mitra->gambar }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
