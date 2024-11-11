<section class="hero-section position-relative">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
            <div class="carousel-item position-relative @if($key == 0) active @endif">
                <div class="hero-overlay"></div>
                <img src="{{ config('app.backend_url'). '/storage/'.$banner->image }}" class="" alt="slider-img" />
                <div class="container">
                    <div class="hero-content">
                        <h2 class="hero-title">
                            {{ $banner->name }}
                        </h2>
                        <p class="hero-subtitle">
                            {{ $banner->description }}
                        </p>
                        <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                            <a href="#" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">Lihat Demo</a>
                            <a href="https://wa.me/{{ '62'. ((int)$profile['no_wa'] ?? 00) }}" target="_blank"
                                class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="bi bi-chevron-left btn-navigate" aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="bi bi-chevron-right btn-navigate" aria-hidden="true"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>