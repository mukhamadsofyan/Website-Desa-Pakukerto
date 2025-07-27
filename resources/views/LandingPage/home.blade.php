<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:37:56 GMT -->

<!-- Start Head -->
@include('LandingPage.Layout.head')
<!-- End Head -->

<body class="home-2">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    @include('LandingPage.Layout.header')
    <!-- header ends -->

    <!-- banner starts -->
    <section class="banner-main pb-0" style="padding-top: 83px;">
        <div class="banner-content">
            <div class="slider banner-slider">
                <div class="h2-slider-list sl-overlay"
                    style="background-image: url({{ asset('LandingPageOri/assets/images/banner/final.png') }});height:44pc">
                </div>
                <div class="h2-slider-list sl-overlay"
                    style="background-image: url({{ asset('LandingPageOri/assets/images/banner/slider2.png') }});height:44pc" >
                </div>
                <div class="h2-slider-list sl-overlay"
                    style="background-image: url({{ asset('LandingPageOri/assets/images/banner/2.png') }});height:44pc">
                </div>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- content main start -->
    <section class="services-main">
        <div class="container">
            <div class="service-full wow fadeInRight">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row service-list-wrap">
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-scblue mb-4">
                                    <i class="far fa-user"></i>
                                    <h4 class="cl-white">PROFILE DESA</h4>
                                    <p class="m-0">Menyajikan sejarah desa, visi misi, dan struktur pemerintahan
                                        secara ringkas.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-scgreen mb-4">
                                    <i class="fas fa-globe-americas"></i>
                                    <h4 class="cl-white">POTENSI DESA</h4>
                                    <p class="m-0">Berisi informasi produk unggulan, wisata lokal, dan potensi sumber
                                        daya desa.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-sc-lblue mb-4">
                                    <i class="fas fa-book-open"></i>
                                    <h4 class="cl-white">AGENDA & KEGIATAN</h4>
                                    <p class="m-0">Menampilkan jadwal kegiatan warga, acara resmi desa, dan info
                                        musyawarah.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-sc-dblue mb-4">
                                    <i class="fas fa-book"></i>
                                    <h4 class="cl-white">TRANSPARASI DANA DESA</h4>
                                    <p class="m-0">Laporan anggaran desa yang terbuka, akurat, dan mudah diakses
                                        masyarakat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content main -->

    <!-- About start -->
    <section class="about-company p-0">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-5 wow fadeInLeftBig">
                    <div class="about-wrap-img">
                        <img src="{{ asset('LandingPageOri/assets/images/inner/education-students-people-knowledge-concept-2021-04-02-19-49-59-utc.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRightBig">
                    <div class="about-us-wrap">
                        <div class="about-title">
                            {{-- <h4 class="top-title">ABOUT EPATHSALA</h4> --}}
                            <h2 class="mb-3 pb-3">Sambutan Bapak Kepala Desa <span class="cl-blue">Pakukerto</span></h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Assalamu’alaikum Warahmatullahi Wabarakatuh, <br>

                                Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas limpahan rahmat dan
                                karunia-Nya, website resmi Desa Pakukerto ini dapat kami hadirkan sebagai sarana
                                informasi dan komunikasi antara pemerintah desa dengan masyarakat. Website ini merupakan
                                bagian dari komitmen kami dalam mewujudkan tata kelola pemerintahan desa yang
                                transparan, terbuka, dan berbasis teknologi informasi.<br> <br>

                                Melalui website ini, kami berupaya menyampaikan berbagai informasi penting terkait
                                program kerja pemerintah desa, layanan administrasi, kegiatan sosial kemasyarakatan,
                                serta potensi yang dimiliki Desa Pakukerto, baik dari sektor pertanian, UMKM, seni
                                budaya, maupun pariwisata. Kami berharap media ini dapat menjadi penghubung yang aktif
                                antara pemerintah dan warga, serta mendorong partisipasi masyarakat dalam pembangunan
                                desa yang berkelanjutan.<br> <br>

                            </p>
                            <p class="mb-4">
                                Kami mengucapkan terima kasih atas dukungan semua pihak yang telah membantu dalam
                                pengembangan website ini. Semoga keberadaan website Desa Pakukerto dapat memberikan
                                manfaat nyata bagi masyarakat, serta menjadi salah satu langkah menuju desa yang maju,
                                mandiri, dan berdaya saing tinggi di era digital ini. <br>

                                Wassalamu’alaikum Warahmatullahi Wabarakatuh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-shape01"></div>
    </section>
    <!-- About end -->

    <!-- Counter main -->
    <section class="counter">

        <div class="container">
            @foreach ($penduduk as $datapenduduk)
            <div class="counter-wrap wow fadeInUp">
                <div class="content d-flex justify-content-between">
                    <div class="value-pin">
                        <span class="countfect value" data-num="{{ $datapenduduk->total_penduduk }}"></span>
                        <h5>Penduduk</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="{{ $datapenduduk->total_dusun }}"></span>
                        <h5>Dusun</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="{{ $datapenduduk->total_rt }}"></span>
                        <h5>RT</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="{{ $datapenduduk->total_rw }}"></span>
                        <h5>RW</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Counter main -->

    <!-- Browse start -->
    <section class="browse-main p-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Layanan Publik</span>
                    </div>
                    <h3>Layanan Untuk Masyarakat <span class="cl-blue">Desa</span></h3>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="browse-list">
                    <a href="course-2.html">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>Surat Online</h4>
                    </a>
                </div>
                <div class="browse-list">
                    <a href="course-2.html">
                        <i class="fa-solid fa-bullhorn"></i>
                        <h4>Pengumuman</h4>
                    </a>
                </div>
                <div class="browse-list">
                    <a href="course-2.html">
                        <i class="fa-solid fa-file"></i>
                        <h4>Aduan Warga</h4>
                    </a>
                </div>
                <div class="browse-list">
                    <a href="course-2.html">
                        <i class="fa-solid fa-truck-medical"></i>
                        <h4>Siaga Ambulan</h4>
                    </a>
                </div>
                <div class="browse-list">
                    <a href="course-2.html">
                        <i class="fa-solid fa-house"></i>
                        <h4>Kependudukan Online</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse end -->

    <!-- Courses start -->
    {{-- <section class="courses">
        <div class="container">
            <div class="section-title borderline">
                <div class="title-top">
                    <h3>ALL COURSES OF EPATHSHALA</h3>
                    <p>Online learning offers a new way to explore subjects you’re passionate about.</p>
                </div>
                <a href="course-1.html" class="btn">Read More</a>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-1.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">DIGITAL MARKETING | SOCIAL MEDIA MARKETING
                                        BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-2.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">BUILD BRAND INTO MARKETING: TACKLING NEW MARKETING</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-3.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">CULTURE & STRATEGIES FOR A SUCCESSFUL BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-4.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">GROW YOUR BUSINESS BY MASTERED IN SOME TECHNIQUE</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-5.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">GROW UP AUDIENCE TO PROGRESS BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-6.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">JAVA PROGRAMMING A-Z FULLY CLASSES WITH FULL TASK</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Courses ends -->

    <!-- Instructors start -->
    <br> <br> <br>
    <section class="instructors p-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Struktur Organisasi</span>
                    </div>
                    <h5>Struktur Organisasi dan Tata Kerja Pemerintah Desa Pakukerto Kecamatan Sukorejo Kabupaten
                        Pasuruan <span class="cl-blue">Provinsi Jawa Timur</span></h5>
                </div>
            </div>
            <div class="row instruct-main mb-3 wow fadeInLeft">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-1.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>H. Surateman</h4>
                            <span class="cl-orange">Kepala Desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-2.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>[nama sekertaris]</h4>
                            <span class="cl-orange">Sekertaris Desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-3.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>John Melton</h4>
                            <span class="cl-orange">Sekertasris Desa 2</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-4.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>[Nama Bendahara]</h4>
                            <span class="cl-orange">Bendahara Desa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instructors ends -->

    <!-- Packages news start -->
    {{-- <section class="home-2 packages">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Awesome Packages</span>
                    </div>
                    <h3>SIMPLE ALL INCLUSIVE <span class="cl-blue">PRICING</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="pkg-container text-center bg-white">
                        <div class="pg-title">
                            <i class="fas fa-server"></i>
                            <h3 class="cl-orange">RECOMMENDED</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium perspiciatis</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-orange"><i class="fas fa-dollar-sign"></i> 5.99<span>/Month</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Create and host custom content</li>
                                <li><i class="fas fa-check"></i> Create custom learning paths</li>
                                <li><i class="fas fa-check"></i> Custom Categories</li>
                                <li><i class="fas fa-check"></i> Native courses in English</li>
                            </ul>
                            <a href="contact.html" class="btn bg-orange pk-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container text-center">
                        <div class="pg-title">
                            <i class="fas fa-cog"></i>
                            <h3 class="cl-blue">STANDARD</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium perspiciatis</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-blue"><i class="fas fa-dollar-sign"></i> 25.99<span>/Month</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Create and host custom content</li>
                                <li><i class="fas fa-check"></i> Create custom learning paths</li>
                                <li><i class="fas fa-check"></i> Custom Categories</li>
                                <li><i class="fas fa-check"></i> Native courses in all Langauges</li>
                                <li><i class="fas fa-check"></i> 24/7 customer support</li>
                            </ul>
                            <a href="contact.html" class="btn pk-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container text-center">
                        <div class="pg-title">
                            <i class="fas fa-rocket"></i>
                            <h3>PREMIUM</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium perspiciatis</p>
                        </div>
                        <div class="pg-main">
                            <p><i class="fas fa-dollar-sign"></i> 25.99<span>/Month</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Create and host custom content</li>
                                <li><i class="fas fa-check"></i> Create custom learning paths</li>
                                <li><i class="fas fa-check"></i> Custom Categories</li>
                                <li><i class="fas fa-check"></i> Native courses in all Langauges</li>
                                <li><i class="fas fa-check"></i> 24/7 customer support</li>
                            </ul>
                            <a href="contact.html" class="btn pk-btn bg-stblack">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Packages news end -->

    <!-- News/Events news start -->
    <section class="courses news-events">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Event Desa</span>
                    </div>
                    <h3>Agenda <span class="cl-blue">Desa</span> <span class="cl-blue">Pakukerto</span></h3>
                </div>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/Kerja-Bakti.png') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">Kerja Bakti Bersama Warga Dusun Kemiri</a>
                                </h4>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 30 Juli</li>
                                    <li class="mr-3"><i class="far fa-clock"></i> 09.00-selesai</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Depan SDN 2 Pakukerto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/Bazar.png') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">Bazar Produk UMKM & Hasil Tani</a>
                                </h4>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 20 Agustus</li>
                                    <li class="mr-3"><i class="far fa-clock"></i> 10.00-15.00</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Pasar Desa Pakukerto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/Gerak-Jalan.png') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">Gerak Jalan Memperingati HUT RI 2025</a>
                                </h4>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 30 Agustus</li>
                                    <li class="mr-3"><i class="far fa-clock"></i> 07.00-Selesai </li>
                                    <li><i class="fas fa-map-marker-alt"></i> Lapangan Desa Pakukerto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News/Events news start -->

    <!--  Call to action start -->
    <section class="home-2 call-action p-0 wow fadeInUp">
        <div class="container">
            <div class="call-wrap">
                <div class="call-main">
                    <h2 class="mb-4">Desa Hebat Dimulai dari Warganya... <span class="cl-blue"> Ayo Bangun Desa Kita
                            Lewat Aksi dan Kepedulian</span>
                    </h2>
                    <p>Sebuah desa yang maju dan sejahtera tidak tercipta hanya dari pembangunan fisik atau program
                        pemerintah, tapi dari semangat dan kepedulian setiap warganya. Ketika warga saling bergandengan
                        tangan—ikut menjaga lingkungan, aktif dalam kegiatan sosial, hingga menyuarakan aspirasinya—maka
                        desa akan tumbuh menjadi tempat yang lebih baik untuk semua. Mari bersama-sama mewujudkan desa
                        yang mandiri, bersih, ramah, dan membanggakan. Perubahan dimulai dari langkah kecil, dan langkah
                        itu bisa dimulai dari kamu.</p>
                    {{-- <div class="mt-3">
                        <a href="contact.html" class="btn">Join Now</a>
                    </div> --}}
                </div>
                <div class="call-image">
                    <img src="{{ asset('LandingPageOri/assets/images/shape/Education-13-Converted-01-1024x667.png') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!--  Call to action end -->

    <!--  Blog to action start -->
    <section class="home-2 blog-article p-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline wow fadeInLeft">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Pakukerto NEWS</span>
                    </div>
                    <h3>Berita <span class="cl-blue">Seputar</span> Desa <span class="cl-blue">Pakukerto</span></h3>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="/blog/blogdetail">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/Bakti.png') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Gotong Royong </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-4.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail">
                                    <a href="/blog/blogdetail">
                                        <h4>Warga Desa Pakukerto Gelar Kerja Bakti Bersihkan Lingkungan</h4>
                                    </a>
                                    <p>Dalam semangat gotong royong, warga Desa Pakukerto mengadakan kerja bakti massal
                                        membersihkan saluran air dan fasilitas umum pada Minggu pagi (30 Juli 2025).
                                        Kegiatan ini diikuti oleh seluruh RT dan didukung oleh Karang Taruna serta
                                        ibu-ibu PKK.</p>
                                    <a href="/blog/blogdetail" class="bl-link">Read More <i
                                            class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-start">
                                        <li>1 Agustus 2025</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="/blog/blogdetail">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/Peresmian.png') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Pengumuman </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-5.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail">
                                    <a href="/blog/blogdetail">
                                        <h4>Desa Pakukerto Resmikan Layanan Aduan Online Melalui Website</h4>
                                    </a>
                                    <p>Untuk meningkatkan keterbukaan dan pelayanan publik, pemerintah Desa Pakukerto
                                        kini menyediakan fitur pengaduan online yang bisa diakses langsung melalui
                                        website resmi desa. Warga dapat menyampaikan keluhan, aspirasi, atau laporan
                                        dengan mudah.</p>
                                    <a href="/blog/blogdetail" class="bl-link">Read More <i
                                            class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-start">
                                        <li>20 Agustus 2025</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="/blog/blogdetail">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/Panen.png') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Berita Desa </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-6.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail">
                                    <a href="/blog/blogdetail">
                                        <h4>Panen Raya Sukses, Petani Desa Sambut Harga Gabah Stabil</h4>
                                    </a>
                                    <p>Para petani di Desa Pakukerto bersyukur atas panen raya tahun ini yang
                                        berlangsung lancar dan menghasilkan hasil pertanian berkualitas. Pemerintah desa
                                        turut memfasilitasi distribusi dan penjualan hasil panen ke koperasi dan pasar
                                        lokal.</p>
                                    <a href="/blog/blogdetail" class="bl-link">Read More <i
                                            class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-start">
                                        <li>22 Juli 2025</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog to action end -->

    <!-- Testimonial feedback -->
    <br> <br>
    <section class="home-2 testimonial">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Apa Kata Warga Desa</span>
                    </div>
                    <h4>Pendapat dan pengalaman warga tentang layanan serta informasi dari website resmi desa kami.</h4>
                </div>
            </div>
            <div class="row review-slider feedback-main wow fadeInUp">
                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content">
                            <ul class="mb-2">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i> </li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                            <p class="mb-0">
                                "Website desa ini sangat membantu saya mendapatkan informasi terbaru dan pelayanan
                                administrasi dengan mudah. Tampilan yang bersih dan ramah pengguna!"
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-1.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Mukhamad Sofyan</h5>
                                <span class="cl-orange">Warga Desa Pakukerto</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content">
                            <ul class="mb-2">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                            <p class="mb-0">
                                "Kini saya tidak perlu ke kantor desa untuk cek pengumuman. Semua sudah tersedia secara
                                online di website desa ini. Sangat praktis dan efisien!"
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Budi Santoso</h5>
                                <span class="cl-orange">Ketua RT 03/RW 02</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content">
                            <ul class="mb-2">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                            <p class="mb-0">
                                "Website desa ini sangat informatif, saya bisa tahu jadwal kegiatan desa dan pengumuman
                                penting tanpa harus keluar rumah."
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-1.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Lestari Widya</h5>
                                <span class="cl-orange">Warga Desa Pakukerto</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content">
                            <ul class="mb-2">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                            <p class="mb-0">
                                "Sebagai pelaku UMKM, saya merasa terbantu karena informasi pelatihan dan bantuan usaha
                                selalu diperbarui di website desa."
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Yusuf Maulana</h5>
                                <span class="cl-orange">Pelaku UMKM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial ends -->

    <!--  Newsletter start -->

    <!--  Newsletter end -->
    
    <!-- Footer starts -->
    @include('LandingPage.Layout.footer')
    <!-- Footer ends -->

    <!-- Search form popup -->
    <form action="#" class="ct-searchForm">
        <div class="inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input id="cf-search-form" type="text" placeholder="Search ..." required
                                class="form-control" />
                            <button type="submit" class="ct-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <a href="#" class="ct-searchForm-close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Search form popup end -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts Start* -->
    @include('LandingPage.Layout.script')
    <!-- *Scripts End* -->

</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:18 GMT -->

</html>
