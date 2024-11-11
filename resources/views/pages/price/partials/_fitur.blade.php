<section id="someFitur" class="bg-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Ditambah Banyak Fitur Handal</h2>
        </div>

        <div class="somefitur-wrap">
            @foreach ($features as $key => $feature)
            <div class="d-flex bg-white px-2 py-3 gap-3 gap-md-2 rounded-4 somefitur-card">
                <div class="col-2">
                    <img src="{{ config('app.backend_url').'/storage/'.$feature->icon }}" alt="icon" class="w-full" />
                </div>
                <div class="col-9">
                    <b>{{ $feature->judul }}</b>
                    <p class="mt-2">
                        {!! $feature->konten !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>