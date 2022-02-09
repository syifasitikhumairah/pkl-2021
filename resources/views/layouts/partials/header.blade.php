<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="">Pondok Yatim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Home<i class="bi bi-house-fill"></i></a></li>
                <li><a class="nav-link scrollto" href="/#about">Tentang Kami<i class=" bi bi-activity"></i></a></li>
                <li><a class="nav-link scrollto" href="/kegiatan">Kegiatan<i class=" bi bi-calendar2"></i></a></li>
                <li><a class="nav-link scrollto " href="/#portfolio">Galeri Foto<i class="bi bi-images"></i></a></li>
                <li><a class="nav-link scrollto " href="{{ route('createDonasi') }}">Donasi sekarang</a>
                <li><a class="nav-link scrollto " href="/#contact">Kontak<i class="bi bi-telephone"></i></a></li>
                <li class="dropdown"><a href=""><span>Login</span> <i class="bi bi-box-arrow-in-right"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto " href="{{ route('login') }}">Login sebagai Admin</a></li>
                    </ul>
                </li>

                <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
            </ul>

        </nav><!-- .navbar -->

    </div>
    <hr>
</header>
