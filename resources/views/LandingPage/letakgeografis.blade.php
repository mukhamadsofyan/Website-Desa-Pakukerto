<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')

<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="breadcrumb-main">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>LETAK GEOGRAFIS DESA PAKUKERTO</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <section class="home-2 packages">
        <div class="container">
            <div class="map-container">
                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26069.26444533244!2d112.68584829536974!3d-7.722518030077664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d6d1cb7927af%3A0x2572fe71bc723997!2sPakukerto%2C%20Kec.%20Sukorejo%2C%20Pasuruan%2C%20Jawa%20Timur!5e1!3m2!1sid!2sid!4v1752473890035!5m2!1sid!2sid"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="pkg-container bg-white h-100 d-flex flex-column">
                        <div class="pg-title text-center">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3 class="cl-orange">Batas Wilayah Desa</h3>
                        </div>
                        <div class="pg-main flex-grow-1">
                            <p style="font-size: 20px; padding-left: 0px;">Desa Pakukerto merupakan bagian integral dari
                                wilayah
                                Indonesia, yang secara
                                geografis memiliki batas-batas administratif sebagai berikut:</p>
                            <ul>
                                <li><i class="fas fa-compass"></i> Utara: Berbatasan langsung dengan
                                    Desa Suwayuwo (Kec. Sukorejo).</li>
                                <li><i class="fas fa-compass"></i> Selatan: Berbatasan dengan
                                    Desa Mojotengah (Kec. Sukorejo).</li>
                                <li><i class="fas fa-compass"></i> Barat: Berbatasan dengan
                                    Desa Lecari (Kec. Sukorejo).</li>
                                <li><i class="fas fa-compass"></i> Timur: Berbatasan dengan
                                    Desa Wonokerto (Kec. Sukorejo).</li>
                            </ul>
                            <p style="font-size: 20px; padding-left: 0px;">Secara administratif, Desa Pakukerto termasuk
                                dalam
                                wilayah Kecamatan Sukorejo, Kabupaten Pasuruan, Provinsi Jawa Timur.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="pkg-container bg-white h-100 d-flex flex-column">
                        <div class="pg-title text-center">
                            <i class="fas fa-cloud-sun-rain"></i>
                            <h3 class="cl-blue">Kondisi Geografis & Iklim</h3>
                        </div>
                        <div class="pg-main flex-grow-1">
                            <p style="font-size: 20px; padding-left: 0px;">Desa Pakukerto memiliki kondisi geografis dan
                                iklim yang
                                sangat mendukung
                                kehidupan dan kegiatan pertanian. Berikut detailnya:</p>
                            <ul>
                                <li><i class="fas fa-chart-area"></i> Ketinggian: Ketinggian rata-rata desa berada
                                    pada kisaran 150 - 300 meter di atas
                                    permukaan laut. Topografi desa didominasi oleh dataran rendah
                                    bergelombang dan sebagian kecil perbukitan ringan.</li>
                                <li><i class="fas fa-thermometer-half"></i> Iklim: Desa kami memiliki iklim tropis
                                    dengan dua musim utama, yaitu musim hujan dan musim kemarau. Suhu rata-rata harian
                                    berkisar antara 24°C - 33°C, dengan kelembaban
                                    udara yang cukup tinggi.</li>
                                <li><i class="fas fa-water"></i> Sumber Daya Air: Ketersediaan air bersih sangat
                                    memadai berkat keberadaan beberapa sungai kecil, mata air alami,
                                    dan jaringan irigasi yang mengalir di sekitar wilayah desa.</li>
                                <li><i class="fas fa-leaf"></i> Pemanfaatan Lahan: Sebagian besar lahan di desa
                                    dimanfaatkan untuk pertanian sawah produktif, perkebunan (misal:
                                    jagung dan palawija), serta permukiman penduduk.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="pkg-container bg-white text-center">
                        <div class="pg-title">
                            <i class="fas fa-images"></i>
                            <h3>Galeri Visual Geografis Desa</h3>
                        </div>
                        <div class="pg-main">
                            <p class="mb-4" style="font-size: 20px">Jelajahi keindahan lanskap dan fitur geografis
                                desa kami melalui koleksi
                                foto berikut ini. Gambar-gambar ini menunjukkan keunikan alam dan lingkungan di Desa
                                Pakukerto.</p>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <img src="https://via.placeholder.com/400x250?text=Pemandangan+Perbukitan+Pakukerto"
                                        alt="Pemandangan Perbukitan Desa Pakukerto" class="img-fluid rounded shadow-sm">
                                    <p class="small text-muted mt-2" style="font-size: 20px">Pemandangan perbukitan di
                                        sisi selatan desa.</p>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <img src="https://via.placeholder.com/400x250?text=Aliran+Irigasi+Pakukerto"
                                        alt="Aliran Irigasi Desa Pakukerto" class="img-fluid rounded shadow-sm">
                                    <p class="small text-muted mt-2" style="font-size: 20px">Salah satu aliran irigasi
                                        yang vital bagi pertanian desa.</p>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <img src="https://via.placeholder.com/400x250?text=Hamparan+Sawah+Pakukerto"
                                        alt="Hamparan Sawah Desa Pakukerto" class="img-fluid rounded shadow-sm">
                                    <p class="small text-muted mt-2" style="font-size: 20px">Luasnya hamparan persawahan
                                        di Desa Pakukerto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('LandingPage.Layout.footer')
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
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    @include('LandingPage.Layout.script')
</body>

</html>
