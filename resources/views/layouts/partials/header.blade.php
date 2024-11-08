<header>
    <nav class="navbar navbar-expand-lg fixed-top z-3 bg-transparent" id="navbar">
        <div class="container">
            <div class="nav-wrap">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="assets/images/logo.png" alt="Logo" />
                </a>

                <div class="d-flex d-md flex-row-reverse flex-md-row">
                    <button id="mobile-menu-button" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="bi bi-list"></i>
                        <!-- <span class="navbar-toggler-icon"></span> -->
                    </button>

                    <!-- Offcanvas content -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <!-- Navbar links inside Offcanvas -->
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('feature') }}"
                                        data-link="{{ route('feature') }}">Fitur
                                        Aplikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('hardware') }}"
                                        data-link="{{ route('hardware') }}">Perangkat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('price') }}"
                                        data-link="{{ route('price') }}">Harga</a>
                                </li>
                                <!-- Dropdown menu -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="supportDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Support
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="supportDropdown">
                                        <li><a class="dropdown-item" href="{{ route('panduan') }}"
                                                data-link="{{ route('panduan') }}">Panduan</a></li>
                                        <li><a class="dropdown-item" href="{{ route('faq') }}"
                                                data-link="{{ route('faq') }}">FAQ</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Login & Register buttons -->
                            <div class="d-flex gap-2 align-items-center mt-3 mt-md-0">
                                <a href="login.html" class="login px-4">Masuk</a>
                                <a href="register.html" class="btn btn-primary rounded-pill px-4">Coba
                                    Gratis</a>
                            </div>
                        </div>
                    </div>
                    <!-- Language Dropdown -->
                    <select class="" name="lang" id="lang">
                        <option value="id">ID</option>
                        <option value="en">EN</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
</header>
