<!-- Footer -->
<footer>
    <!-- Floating -->
    <div id="float">
        <div class="container">
            <div class="floating bg-floating shadow">
                <div>
                    <p>Maksimalkan Bisnismu, Pakai Sipos Sekarang!</p>
                    <p>Harga mulai dari Rp 150,000 / Bulan</p>

                    <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 mt-5">
                        <a href="{{ route('price') }}" class="btn btn-primary rounded-pill fs-5 px-4 py-2">Beli Paket
                            Sekarang</a>
                        <a href="#" class="btn btn-outline-light rounded-pill fs-5 px-4 py-2">Konsultasi
                            Kebutuhan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Floating -->

    <div class="footer-content">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-3">
                    <a href="#">
                        <p class="fst-italic mb-0">Aplikasi Point Of Sales</p>
                        <img src="{{ config('app.backend_url') . '/storage/' . $profile['logo'] }}" alt="logo"
                            class="max-h-70" />
                    </a>
                    <p class="mt-4">
                        {{ $profile['deskripsi'] ?? 'Deskripsi aplikasi' }}
                    </p>

                    <div class="contact mt-4">
                        <h2 class="fs-5">Head Office</h2>
                        <p>{{ $profile['alamat'] ?? 'Alamat aplikasi' }}</p>
                    </div>
                    <div class="contact mt-4">
                        <h2 class="fs-5">Inpos Care</h2>
                        <p>{{ $profile['phone'] ?? 'Phone aplikasi' }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="fw-semibold mb-5 fs-6">Layanan</p>
                    <ul class="d-flex flex-column gap-4 fw-medium">
                        <li><a>Point Of Sale</a></li>
                        <li><a></a>Cashless Payment</a></li>
                        <li><a>Manajemen Karyawan</a></li>
                        <li><a>Manajemen Pelanggan</a></li>
                        <li><a>Manajemen Inventori</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="fw-semibold mb-5 fs-6">Solusi Bisnis</p>
                    <ul class="d-flex flex-column gap-4 fw-medium">
                        <li><a>Toko Retail</a></li>
                        <li><a>Food & Beverage</a></li>
                        <li><a>Jasa Laundry</a></li>
                        <li><a>Babershop</a></li>
                        <li><a>Carwash & Showroom</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="fw-semibold mb-5 fs-6">Harga</p>
                    <ul class="d-flex flex-column gap-4 fw-medium">
                        <li><a>Paket Basic</a></li>
                        <li><a>Paket Advance</a></li>
                        <li><a>Paket Professional</a></li>
                        <li><a>Paket Enterprise</a></li>
                    </ul>
                </div>
            </div>

            <div
                class="border-top border-bottom border-white py-3 mt-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between row-gap-3">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ $profile['url_playstore'] ?? 'javascript:' }}">
                        <img src="assets/images/googleplay-download.png" alt="googleplay-download" class="w-full" />
                    </a>
                    <a href="{{ $profile['url_appstore'] ?? 'javascript:' }}">
                        <img src="assets/images/appstore-download.png" alt="appstore-download" class="w-full" />
                    </a>
                </div>

                <div class="social-wrap">
                    @foreach ($sosmeds as $key => $sosmed)
                    <a href="{{ $sosmed->url }}">
                        <img src="{{ config('app.backend_url') . '/storage/' . $sosmed->icon }}"
                            alt="{{ $sosmed->nama }}l" />
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mt-4">
                <p class="fw-semibold">{{ $profile['nama'] ?? 'Nama Perusahaan' }}</p>
                <div class="d-flex align-items-center gap-3 justify-content-center">
                    <a href="{{ route('syarat_ketentuan') }}">Syarat dan Ketentuan</a>
                    <a href="{{ route('kebijakan_privasi') }}">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->