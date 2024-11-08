<section class="section">
    <div class="container">
        <div class="row flex-column flex-md-row align-items-center gap-5">
            <div class="col-md-6">
                <h2 class="section-title mb-2">
                    {{ $payment['judul'] }}
                </h2>
                <p class="section-text">
                    {{ $payment['konten'] }}
                </p>
            </div>

            <div class="col-md-5">
                <img src="{{ config('app.backend_url') . '/storage/' . $payment['gambar'] }}" class="w-full"
                    alt="payment" />
            </div>
        </div>
    </div>
</section>
