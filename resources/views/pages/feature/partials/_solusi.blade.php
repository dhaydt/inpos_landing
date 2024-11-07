<section class="section bg-blue">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Fitur Solusi</h2>
            <p class="section-text">
                Beragam Fitur menarik dapat menjadi Solusi untuk Bisnis Anda
            </p>
        </div>

        <div class="row g-4">
            @foreach ($solutions as $key => $solution)
            <div class="col-12 col-md-6">
                <div class="solusi-item">
                    <span>{{ $solution->judul }}</span>
                    @foreach ($solution->details as $k => $detail)
                    @if ($loop->last)
                    <div class="row gap-4 align-items-center">
                        <div class="col-1">
                            <img src="{{ asset($detail->icon) }}" alt="icon" />
                        </div>
                        <div class="col-10">
                            <p>{{ ucwords($detail->judul) }}</p>
                        </div>
                    </div>
                    @else
                    <div class="row gap-4 align-items-center mb-2">
                        <div class="col-1">
                            <img src="{{ asset($detail->icon) }}" alt="icon" />
                        </div>
                        <div class="col-10">
                            <p>{{ ucwords($detail->judul) }}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>