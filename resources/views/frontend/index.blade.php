@extends('layouts.frontend')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide1.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Sistem Informasi Pondok
                                    Yatim</span></h2>
                            <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                      <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Childfree dalam Pandangan Islam</h2>
                            <p class="animate__animated animate__fadeInUp">Akhir-akhir ini ramai dibicarakan topik childfree
                                setelah diungkapkan secara terbuka oleh salah seorang influencer tentang pilihannya untuk
                                tidak memiliki anak. Bagaimana hal ini dipandang dalam kacamata Islam? Berikut
                                penjelasannya.</p>
                            <a href="https://pesantrenalirsyad.org/childfree-dalam-pandangan-islam/"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Artikel</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">4 Cara Terbaik Menegur Anak</h2>
                            <p class="animate__animated animate__fadeInUp">Ketika balita melakukan kesalahan atau hal yang
                                kurang baik, tegur ia dengan cara yang tepat. Cara yang tepat akan meminimalisasi dampak
                                negatif pada mental anak.
                                Coba gunakan empat cara, yang dilansir dari artikel dibawah ini:</p>
                            <a href="https://www.parenting.co.id/balita/4-cara-terbaik-menegur-anak"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Artikel</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="assets/img/anak.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>VISI</h3>
                        <p class="fst-italic">
                            Terwujudnya Lembaga Amil Zakat Nasional yang unggul, amanah dan berperan aktif dalam
                            pembangunan sumberdaya manusia berdasarkan pemberdayaan.</p><br>
                        <h3>MISI</h3>
                        <p>Mengorganisasi sumber daya dan melakukan pemberdayaan potensi umat untuk kesejahtraan
                            kemanusiaan, pendidikan, kesehatan dan dakwah. Mengoptimalisasi pengelolaan dana ziswaf
                            (zakat, infaq, sedekah, wakaf) dan kemanusiaan sesuai syari’at islam dan undang-undang yang
                            berlaku.
                            Bersinergi membangun program pemberdayaan dan pendayagunaan dengan menguatkan jaringan
                            filantropi
                            Nasional dan Internasional</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="section-title">
                    <h2>Kode Etik</h2>
                </div>
                <div class="row no-gutters">

                    <div class="col-lg-6 col-md-6 content-item">
                        <span>01</span>
                        <h4>Sidik</h4>
                        <p>Benar dalam pengelolaan sesuai dengan Syariat Islam.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item">
                        <span>02</span>
                        <h4>Amanah</h4>
                        <p>Tepat dalam penerimaan dan penyaluran sesuai dengan Undang-Undang.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item">
                        <span>03</span>
                        <h4>Fathonah</h4>
                        <p>Senantiasa menjalankan inovasi secara kreatif, efektif dan efisien dalam mewujudkan keberhasilan
                            institusi.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item">
                        <span>04</span>
                        <h4>Tabligh</h4>
                        <p>Membangun sinergi dengan semangat edukasi yang tinggi demi tercapainya kehidupan yang lebih baik.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title ">
                    <h2>Nilai Institusi</h2>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">Disiplin <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Lurus <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Jujur <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Tulus <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Tuntas <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Berakhlakul karimah <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Kredibel /terpercaya <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Profesional <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Aktif, Kreatif, inovatif <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Komunikatif, produktif <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Efektif & efisien <i class="bi bi-check2-circle"></i></div>
                        <div class="swiper-slide">Tawakal & Optimis <i class="bi bi-check2-circle"></i></div>
                        <!-- <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Our Clients Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>قُلْ اِنَّ رَبِّيْ يَبْسُطُ الرِّزْقَ لِمَنْ يَّشَاۤءُ مِنْ عِبَادِهٖ وَيَقْدِرُ لَهٗ ۗوَمَآ
                            اَنْفَقْتُمْ
                            <br> مِّنْ شَيْءٍ فَهُوَ يُخْلِفُهٗ ۚوَهُوَ خَيْرُ الرّٰزِقِيْنَ
                        </h3>
                        <p>Katakanlah, “Sungguh, Tuhanku melapangkan rezeki dan membatasinya bagi siapa yang Dia kehendaki
                            di antara hamba-hamba-Nya.”
                            Dan apa saja yang kamu infakkan, Allah akan menggantinya dan Dialah pemberi rezeki yang terbaik.
                            <br>(Q.S. Saba : 39)
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="/donasi/create">AYO DONASI</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

    <div class="section-title">
        <h2>Galeri foto</h2>
    </div>
    <div class="row portfolio-container">
        @foreach ($galeri as $data)
        <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
                <img src="{{ $data->image() }}" class="img-fluid" alt="" style="width:354px; height:250px;">
                <div class="portfolio-info">
                    <h4>{{ $data->judul }}</h4>
                    <div class="portfolio-links">
                        <a href="{{ $data->image() }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="{{ $data->judul }}"><i
                                class="bi bi-arrows-fullscreen"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="form-group text-center">
            <a href="/kegiatan/all"><button type="submit" class="btn btn-outline-primary"
            style="background:#5cb874;
            border-color: #5cb874;
            color: white;
            border-radius:25px;
            width:400px;">Lihat Semua Kegiatan</button></a>
        </div>
    </div>
        </section> --}}
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jalan Cibaduyut Komplek, Jl. Sauyunan I No.14, Kb. Lega, Kec. Bojongloa Kidul, Kota
                                    Bandung, Jawa Barat 40235</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>pondokyatim@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>+62 8983529947</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.064493496442!2d107.5897139!3d-6.9482801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97fcf9962a3ed151!2sPanti%20Yatim%20Indonesia%20(Pyi)%20-%20Kantor%20Pelayanan%20Donasi!5e0!3m2!1sid!2sid!4v1641885528254!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                          <label for="name">Your Name</label>
                                          <input type="text" name="name" class="form-control" id="name" required>
                                        </div>
                                        <div class="form-group col-md-6 mt-3 mt-md-0">
                                          <label for="name">Your Email</label>
                                          <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                      </div>
                                      <div class="form-group mt-3">
                                        <label for="name">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" required>
                                      </div>
                                      <div class="form-group mt-3">
                                        <label for="name">Message</label>
                                        <textarea class="form-control" name="message" rows="10" required></textarea>
                                      </div>
                                      <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                      </div>
                                      <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                  </div> -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
