
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:28 GMT -->

@include('LandingPage.layout.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
@include('LandingPage.layout.header')
    <!-- header ends -->

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-main">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>About Us</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <!-- Breadcrumb end -->
    <!--  Newsletter start -->
    <section class="newsletter">
        <div class="container">
            <div class="news-headding text-center">
                <h2>Silahkan Cek Penerimaan Bansos Anda</h2>
                <p>
                    Subscribe to our newsletter and get many <br />
                    interesting things every week
                </p>
                <form>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan NIK Anda" />
                        <button class="btn"><i class="fas fa-envelope-open-text"></i> Cek Bansos</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--  Newsletter end -->

    <!-- Footer starts -->
    @include('LandingPage.layout.footer')
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

    <!-- *Scripts* -->
    @include('LandingPage.layout.script')
</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:28 GMT -->

</html>
