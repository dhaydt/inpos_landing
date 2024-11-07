<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Fitur Lengkap</h2>
            <p class="section-text">Fitur lengkap yang terintegrasi</p>
        </div>

        <div class="fitur-wrap">
            <img src="assets/images/fitur.png" alt="fitur" class="d-block d-md-none mb-5" />
            <div id="item-0">
                @if (data_get($fitur, '0.judul'))
                <div class="feature-item feature-item-1">
                    <span>{{ ucwords(data_get($fitur, '0.judul', '')) }}</span>
                    {!! ucwords(data_get($fitur, '0.konten', '')) !!}
                </div>
                @endif
            </div>
            <div id="item-1">
                @if (data_get($fitur, '1.judul'))
                <div class="feature-item feature-item-2">
                    <span>{{ ucwords(data_get($fitur, '1.judul', '')) }}</span>
                    {!! ucwords(data_get($fitur, '1.konten', '')) !!}
                </div>
                @endif
            </div>
            <div id="item-2">
                <div class="d-flex flex-column flex-md-row gap-4 w-full justify-content-evenly">
                    @if (data_get($fitur, '2.judul'))
                    <div class="feature-item feature-item-3">
                        <span>{{ ucwords(data_get($fitur, '2.judul', '')) }}</span>
                        {!! ucwords(data_get($fitur, '2.konten', '')) !!}
                    </div>
                    @endif
                    @if (data_get($fitur, '3.judul'))
                    <div class="feature-item feature-item-4">
                        <span>{{ ucwords(data_get($fitur, '3.judul', '')) }}</span>
                        {!! ucwords(data_get($fitur, '3.konten', '')) !!}
                    </div>
                    @endif
                </div>
            </div>
            <div id="item-3">
                @if (data_get($fitur, '4.judul'))
                <div class="feature-item feature-item-5">
                    <span>{{ ucwords(data_get($fitur, '4.judul', '')) }}</span>
                    {!! ucwords(data_get($fitur, '4.konten', '')) !!}
                </div>
                @endif
            </div>
            <div id="item-4">
                @if (data_get($fitur, '5.judul'))
                <div class="feature-item feature-item-6">
                    <span>{{ ucwords(data_get($fitur, '5.judul', '')) }}</span>
                    {!! ucwords(data_get($fitur, '5.konten', '')) !!}
                </div>
                @endif
            </div>
            <div id="item-5" class="d-none d-md-flex justify-content-center align-items-center">
                <img src="assets/images/fitur.png" alt="fitur" />
            </div>
        </div>
    </div>
</section>