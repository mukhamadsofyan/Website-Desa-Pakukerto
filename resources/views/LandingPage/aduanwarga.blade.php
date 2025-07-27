<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->

@include('LandingPage.layout.head')

<body>
    <style>
        .btn-upload {
            display: inline-block;
            width: 100%;
            background-color: #ffffff;
            /* Putih seperti textarea */
            color: #333;
            padding: 14px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #ccc;
            /* Agar tetap terlihat */
            text-align: left;
            /* Rata kiri */
        }

        .img-preview {
            max-width: 100%;
            border-radius: 6px;
            border: 1px solid #ccc;
            padding: 4px;
        }
    </style>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    @include('LandingPage.layout.header')
    <!-- header ends -->

    <!-- Blog title starts -->
    <section class="blog-top-title">
        <div class="bg_bar_title">
            <h1 class="cl-white">Form Pengaduan Warga</h1>
            <p class="cl-white"></p>
        </div>
        <div class="bg__bar_image">
            <img src="images/inner/modern-education-business-startup-friendship-an-2021-07-27-05-12-15-utc-1.jpg"
                alt="" />
        </div>
    </section>
    <!-- Blog title end -->

    <!--  Blog to action start -->
    <section class="blog__details p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg__contents">
                        <div class="blg__ct_form"> <br>
                            {{-- <h3>Leave a Reply</h3> --}}
                            {{-- <p>Your email address will not be published. Required fields are marked *</p> --}}
                         <form method="POST" action="{{ route('aduan.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Message input -->
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <div class="form-outline">
                                            <label>Nama</label>
                                            <input type="text" name="nama" placeholder="Masukkan Nama Anda" id="form6Example1"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-3">
                                    <label>Nomor Telepon/WA</label>
                                    <input type="number" name="no_hp" placeholder="Masukkan Nomor HP/ Whatshapp Anda"
                                        id="form6Example5" class="form-control" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="kategoriPengaduan">Kategori Pengaduan</label>
                                    <select class="form-select" name="kategori" id="kategoriPengaduan">
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="umum">Umum</option>
                                        <option value="sosial">Sosial</option>
                                        <option value="keamanan">Keamanan</option>
                                        <option value="kesehatan">Kesehatan</option>
                                        <option value="kebersihan">Kebersihan</option>
                                        <option value="permintaan">permintaan</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-outline mb-4">
                                    <label>Isi Aduan</label>
                                    <textarea class="form-control" name="isi" id="form6Example7" rows="4"></textarea>
                                </div>

                            
                                <!-- Upload Foto -->
                                <!-- Upload Foto -->
                                <div class="mb-3">
                                    <label class="form-label">Lampiran Foto (Opsional)</label>

                                    <!-- Input File Hidden -->
                                    <input type="file" id="lampiranFoto" name="foto" accept="image/*" hidden>

                                    <!-- Label sebagai Tombol Upload -->
                                    <label for="lampiranFoto" class="btn-upload w-100 text-start">
                                        📷 Pilih Foto
                                    </label>

                                    <!-- Preview Gambar -->
                                    <div id="previewFoto" style="display: none; margin-top: 15px;">
                                        <p class="text-muted">Preview:</p>
                                        <img id="previewImg" class="img-preview" src="#" alt="Preview Foto">
                                    </div>
                                </div>

                                <center><button type="submit" class="btn">Kirim Aduan</button></center> <br> <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog to action end -->

    <!--  Newsletter start -->
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
    <script>
        < script >
            document.getElementById('lampiranFoto').addEventListener('change', function(e) {
                const file = e.target.files[0];
                const previewImg = document.getElementById('previewImg');
                const previewBox = document.getElementById('previewFoto');

                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        previewBox.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewBox.style.display = 'none';
                    previewImg.src = '';
                }
            });
    </script>

    </script>
    @include('LandingPage.layout.script')
</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->

</html>
