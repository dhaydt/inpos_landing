@if (count($bisnis) > 0)
<section class="section bg-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Pilihan Tepat Berbagai Bisnis</h2>
            @if (isset($bisnis[0]))
            <p class="section-text">
                {{ $bisnis[0]['konten'] }}
            </p>
            @endif
        </div>

        <div class="row bisnis-wrap g-3 gap-md-0">
            <div class="col-md-6">
                <div class="row d-flex flex-column justify-content-between gap-3">
                    @if (isset($bisnis[0]))
                    <div class="col-12 position-relative">
                        <img src="{{ config('app.backend_url') .'/storage/' . $bisnis[0]['gambar'] }}" alt="retail" />
                        <div class="bisnis-tag">
                            <p>{{ $bisnis[0]['judul'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if (isset($bisnis[1]))
                    <div class="col-12 position-relative">
                        <img src="{{ config('app.backend_url') .'/storage/' . $bisnis[1]['gambar'] }}" alt="bisnis" />
                        <div class="bisnis-tag">
                            <p>{{ $bisnis[1]['judul'] }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6 position-relative">
                @if (isset($bisnis[2]))
                <img src="{{ config('app.backend_url') .'/storage/' . $bisnis[2]['gambar'] }}" alt="fnb"
                    class="h-100 rounded-5" />
                <div class="bisnis-tag">
                    <p>{{ $bisnis[2]['judul'] }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif