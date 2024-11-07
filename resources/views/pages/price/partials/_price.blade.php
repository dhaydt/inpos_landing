<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Harga Aplikasi Sipos</h2>
            <p class="section-text">
                Lengkap, Murah dan Terjangkau untuk semua bisnis anda
            </p>
        </div>

        <div class="row row-gap-4 mb-5">
            @foreach ($prices as $key => $price)
            <div class="col-12 col-md-3">
                <div class="harga-card @if($key == 0) basic @elseif($key == 1) advance @elseif($key == 2) pro @endif">
                    <div
                        class="harga-card-title @if($price->is_best == 1) d-flex align-items-center justify-content-between row-gap-4 @endif">
                        <h3>{{ $price->nama_harga }}</h3>
                        @if ($price->is_best == 1)
                        <span class="best">Best Seller</span>
                        @endif
                    </div>

                    <div class="harga-card-body">
                        <div class="harga">
                            <b>Rp {{ App\CPU\Helpers::getMoneySeparator($price->harga) }}</b>
                            <p>Per Outlet/Bulan</p>
                        </div>

                        {!! $price->konten !!}

                        <div class="d-flex flex-column gap-2">
                            <a href="#" class="btn btn-outline-primary">Coba Gratis 14 Hari</a>
                            <a href="#" class="btn btn-primary">Beli Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <p class="fw-medium">
            <span class="text-danger">*</span>Harga belum termasuk PPn
        </p>
    </div>
</section>