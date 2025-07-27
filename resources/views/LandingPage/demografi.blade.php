<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="breadcrumb-main">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>DEMOGRAFI PENDUDUK DESA PAKUKERTO</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <section class="home-3 services-main pb-0">
        <div class="container">
            <div class="service-full wow fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 pr-lg-0 wow fadeInLeftBig">
                                <div class="serv-wrap-img">
                                    <img src="{{asset('LandingPageOri/assets/images/inner/girl-doing-homework-or-online-education-2021-04-05-10-57-55-utc.jpg')}}" alt="Kegiatan Penduduk Desa Pakukerto" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 pl-lg-0 wow fadeInRightBig">
                                <div class="serv-us-wrap d-flex flex-column justify-content-center">
                                    <div class="serv-title">
                                        <h4 class="top-title mb-3">INFORMASI KEPENDUDUKAN</h4>
                                        <h2 class="mb-3 pb-3 cl-white">STRUKTUR DEMOGRAFI DESA</h2>
                                    </div>
                                    <div class="serv-content">
                                        <p class="cl-white">
                                            Data demografi Desa Pakukerto diperbarui secara berkala untuk mendukung
                                            perencanaan pembangunan desa yang lebih tepat sasaran dan berkelanjutan.
                                        </p>
                                        <ul class="cl-white">
                                            <li class="text-white"><i class="fas fa-users"></i> Jumlah Total Penduduk: 6.030 jiwa (Data
                                                2023)
                                            </li>
                                            <li class="text-white"><i class="fas fa-male"></i> Laki-laki: 3.012 jiwa</li>
                                            <li class="text-white"><i class="fas fa-female"></i> Perempuan: 3.018 jiwa</li>
                                            <li class="text-white"><i class="fas fa-percentage"></i> Perbandingan Jenis Kelamin:
                                                49.95% Laki-laki, 50.05% Perempuan</li>
                                            <li class="text-white"><i class="fas fa-sitemap"></i> Jumlah Dusun: 5 Dusun (Kemiri, Janti,
                                                Gendol, Pakunden, dan Mojolengko)</li>
                                            <li class="text-white"><i class="fas fa-users-cog"></i> Jumlah RT/RW: 32 RT / 12 RW</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="row service-list-wrap">
                            <div class="col-lg-3 col-md-6 pr-0">
                                <div class="service-ct-list bg-scblue">
                                    <i class="fas fa-church"></i>
                                    <div class="serv-list text-left">
                                        <h4 class="cl-white mb-0">AGAMA</h4>
                                        <span>Mayoritas Islam, dengan kerukunan antarumat beragama</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-scgreen">
                                    <i class="fas fa-briefcase"></i>
                                    <div class="serv-list text-left">
                                        <h4 class="cl-white mb-0">MATA PENCAHARIAN</h4>
                                        <span>Petani (Mayoritas), Pedagang, Buruh Pabrik, Wiraswasta</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-0">
                                <div class="service-ct-list bg-sc-lblue">
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="serv-list text-left">
                                        <h4 class="cl-white mb-0">PENDIDIKAN</h4>
                                        <span>Beragam tingkat pendidikan, fokus peningkatan SDM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 pl-0">
                                <div class="service-ct-list bg-sc-dblue">
                                    <i class="fas fa-home"></i>
                                    <div class="serv-list text-left">
                                        <h4 class="cl-white mb-0">JUMLAH KEPALA KELUARGA</h4>
                                        <span>[Isi data manual: jumlah KK]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title sc-center justify-content-center text-center borderline">
                        <div class="title-top">
                            <div class="title-quote">
                                <span>DATA PENTING</span>
                            </div>
                            <h2>GRAFIK PENDUDUK</h2>
                        </div>
                    </div>
                    <h2 style="text-align: center;">Berdasarkan Kelompok Umur</h2>
                    <div style="width: 1000px; margin: auto;">
                        <canvas id="piramidaChart" width="1000" height="700"></canvas>
                    </div>

                    <script>
                        const labels = @json($labels);
                        const dataMale = @json($male);
                        const dataFemale = @json($female);

                        console.log("Labels:", labels);
                        console.log("Laki-laki:", dataMale);
                        console.log("Perempuan:", dataFemale);

                        new Chart(document.getElementById('piramidaChart'), {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                        label: 'Laki-laki',
                                        data: dataMale,
                                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                                    },
                                    {
                                        label: 'Perempuan',
                                        data: dataFemale,
                                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                                    }
                                ]
                            },
                            options: {
                                indexAxis: 'y',
                                responsive: true,
                                scales: {
                                    x: {
                                        stacked: true,
                                        min: -10,
                                        max: 10,
                                        ticks: {
                                            callback: function(value) {
                                                return Math.abs(value);
                                            }
                                        }
                                    },
                                    y: {
                                        stacked: true
                                    }
                                },
                                plugins: {
                                    legend: {
                                        position: 'top',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                let label = context.dataset.label || '';
                                                let value = Math.abs(context.parsed.x); // supaya tooltip positif juga
                                                return `${label}: ${value}`;
                                            }
                                        }
                                    }
                                }
                            }

                        });
                    </script>

                </div>
                <div>
                 <h2 style="text-align: center;">Berdasarkan Dusun</h2>

                </div>

                <div>
                    <canvas id="dusunChart" width="300" height="300"></canvas>
                </div>
                <div class="info">
                    <strong>Keterangan:</strong><br>
                    @foreach ($data as $row)
                    {{ $row->dusun }} : {{ $row->total }} Jiwa<br>
                    @endforeach
                </div>
            </div>

            <script>
                const ctx = document.getElementById('dusunChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: @json($labelss),
                        datasets: [{
                            data: @json($totals),
                            backgroundColor: [
                                '#36A2EB', '#FFCE56', '#4BC0C0', '#FF6384', '#9966FF'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                            }
                        }
                    }
                });
            </script>

            <h2 style="text-align: center;">Berdasarkan Pendidikan</h2>
            <div>
                <canvas id="pendidikanChart" height="100"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctxPendidikan = document.getElementById('pendidikanChart').getContext('2d');

                const pendidikanChart = new Chart(ctxPendidikan, {
                    type: 'bar',
                    data: {
                        labels: @json($labelpendidikan),
                        datasets: [{
                            label: 'Jumlah Penduduk',
                            data: @json($values),
                            backgroundColor: 'rgba(220, 53, 69, 0.7)'
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        return context.parsed.y + ' orang';
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 10
                                }
                            }
                        }
                    }
                });
            </script>

        </div>
        </div>
    </section>
    <section class="counter">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>DATA PENTING</span>
                    </div>
                    <h2>STATISTIK DESA KAMI</h2>
                </div>
            </div>
            <div class="counter-wrap wow fadeInUp">
                <div class="content d-flex justify-content-between">
                    <div class="value-pin">
                        <span class="countfect value">20</span>
                        <h5>FASILITAS PENDIDIKAN</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value">10</span>
                        <h5>FASILITAS KESEHATAN</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value">10</span>
                        <h5>SARANA IBADAH</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value">10</span>
                        <h5>KELOMPOK MASYARAKAT</h5>
                    </div>
                </div>
            </div>
            <div class="course-bse">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="course-b-list">
                        <h4 class="cl-blue">PENDIDIKAN</h4>
                        <p>Desa Pakukerto terus berupaya meningkatkan kualitas dan akses pendidikan bagi warganya,
                            dari tingkat dasar hingga menengah, serta mendukung pendidikan tinggi.</p>
                    </div>
                    <div class="course-b-list bg-darkblue">
                        <h4 class="cl-blue">KESEHATAN</h4>
                        <p>Pelayanan kesehatan dasar tersedia melalui Puskesmas Pembantu dan Posyandu
                            yang tersebar untuk memastikan kesehatan masyarakat terjaga.</p>
                    </div>
                    <div class="course-b-list">
                        <h4 class="cl-blue">SOSIAL BUDAYA</h4>
                        <p>Tradisi gotong royong dan berbagai kegiatan adat serta keagamaan masih lestari,
                            menjadi pondasi kuat kerukunan dan kebersamaan warga Desa Pakukerto.</p>
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
                            <input id="cf-search-form" type="text" placeholder="Cari..." required
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