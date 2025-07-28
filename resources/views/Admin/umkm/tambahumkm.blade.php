<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:48 GMT -->

@include('Admin.LayoutAdmin.head')

<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('Admin.LayoutAdmin.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('Admin.LayoutAdmin.sidebar')
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Form Tambah Data Kegiatan</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Tambah Data</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Input Data Kegiatan Baru</h4> <br>
                                    {{-- <p class="card-title-desc">Isi semua kolom di bawah untuk menambahkan entri blog
                                        baru.</p> --}}

                                    <form method="post" action="/insertUmkm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Nama
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="blog-title-input"
                                                    placeholder="Masukkan Nama UMKM" name="nama_umkm">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Nama
                                                Pemilik</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="blog-title-input"
                                                    placeholder="Masukkan Nama pemilik" name="nama_pemilik">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jenis_usaha" class="col-md-2 col-form-label">Jenis Usaha</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="jenis_usaha" name="jenis_usaha"
                                                    required>
                                                    <option value="">Pilih Jenis Usaha</option>

                                                    <optgroup label="Makanan & Minuman">
                                                        <option value="kuliner">Kuliner</option>
                                                        <option value="kafe">Kafe</option>
                                                        <option value="minuman kekinian">Minuman Kekinian</option>
                                                        <option value="catering">Catering</option>
                                                    </optgroup>

                                                    <optgroup label="Fashion & Aksesoris">
                                                        <option value="pakaian">Pakaian</option>
                                                        <option value="sepatu">Sepatu</option>
                                                        <option value="aksesoris">Aksesoris</option>
                                                        <option value="hijab">Hijab</option>
                                                    </optgroup>

                                                    <optgroup label="Jasa">
                                                        <option value="fotografi">Fotografi</option>
                                                        <option value="desain grafis">Desain Grafis</option>
                                                        <option value="laundry">Laundry</option>
                                                        <option value="penjahit">Penjahit</option>
                                                    </optgroup>

                                                    <optgroup label="Lainnya">
                                                        <option value="pertanian">Pertanian</option>
                                                        <option value="peternakan">Peternakan</option>
                                                        <option value="Perairan">Perairan</option>
                                                        <option value="kerajinan tangan">Kerajinan Tangan</option>
                                                        <option value="teknologi">Teknologi</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Tahun
                                                Berdiri</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="tahun_berdiri" id="tahun_berdiri">
                                                    <option value="">Pilih Tahun</option>
                                                    @for ($year = 1800; $year <= date('Y'); $year++)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="inner-repeater mb-4">
                                            <label class="form-label">Produk UMKM</label>
                                            <div data-repeater-list="inner-group" class="inner form-group">
                                                <div data-repeater-item class="row mb-2">
                                                    <label class="col-md-2 col-form-label d-none d-md-block"></label>
                                                    <div class="col-md-8 col-8">
                                                        <input type="text" class="form-control" name="phone"
                                                            placeholder="Masukkan Produk UMKM Anda...">
                                                    </div>
                                                    <div class="col-md-2 col-4">
                                                        <button data-repeater-delete type="button"
                                                            class="btn btn-danger w-100">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-2 col-form-label d-none d-md-block"></label>
                                                <div class="col-md-10">
                                                    <button data-repeater-create type="button"
                                                        class="btn btn-success">Tambah Varian</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Alamat
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="blog-title-input"
                                                    placeholder="Masukkan alamat UMKM" name="alamat">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">kontak
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" id="blog-title-input"
                                                    placeholder="Masukkan kontak UMKM" name="kontak">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="blog-content-input" class="col-md-2 col-form-label">Deskripsi
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" id="blog-content-input" rows="8" placeholder="Tulis deskripsi UMKM di sini..."
                                                    name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Tagline
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="blog-title-input"
                                                    placeholder="Masukkan tagline UMKM" name="tagline">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="blog-image-input" class="col-md-2 col-form-label">Foto
                                                UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="blog-image-input"
                                                    accept="image/*" name="foto">
                                                <div class="form-text"> Unggah foto UMKM</div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-md">Simpan
                                                Blog</button>
                                            <button type="reset"
                                                class="btn btn-outline-secondary waves-effect waves-light w-md">Reset
                                                Form</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minible.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://themesbrand.com/" target="_blank"
                                    class="text-reset">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored"
                        value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('Admin.LayoutAdmin.scripts')

</body>

</html>
