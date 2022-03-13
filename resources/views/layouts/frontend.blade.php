<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Pondok Yatim</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <!-- <link href="{{asset('assets/img/favicon.png')}}" rel="icon"> --}}
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green - v4.7.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    {{-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center" style="">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SIM Pondok Yatim</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home<i class="bi bi-house-fill"></i></a></li>
                <li><a class="nav-link scrollto" href="/#about">Tentang Kami<i class=" bi bi-activity"></i></a></li>
                <li><a class="nav-link scrollto" href="/kegiatan">Kegiatan<i class=" bi bi-calendar2"></i></a></li>
                <li><a class="nav-link scrollto " href="/galeri">Galeri Foto<i class="bi bi-images"></i></a></li>
                <li><a class="nav-link scrollto " href="{{ route('createDonasi') }}">Donasi Sekarang<i class="bi bi-heart-fill"></i></a></li>
                <li><a class="nav-link scrollto " href="/#contact">Kontak<i class="bi bi-telephone"></i></a></li>
        </ul>
        <i class="bi mobile-nav-toggle bi-list"></i>
      </nav><!-- .navbar -->

    </div>
    </header>
    <!-- End Header -->

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Pondok Yatim</h3>
            <p>Pondok Yatim adalah Lembaga Amil Zakat Nasional (LAZNAS)
                berdasarkan SK Kemenag RI No.120 Tahun 2019. Bertekad menjadi lembaga
                pengelola dana ZISWAF yang berkhidmat menangani anak yatim/piatu dan terlantar.</p>
            <div class="social-links">
                <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright by <strong><span>syifask</span></strong>. <br>All Rights Reserved
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @include('sweetalert::alert')

</body>

</html>
