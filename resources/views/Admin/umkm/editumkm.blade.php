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
                                <h4 class="mb-0">Form Tambah Data Blog</h4>

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

                                    <h4 class="card-title">Input Data Kegiatan Baru</h4>
                                    {{-- <p class="card-title-desc">Isi semua kolom di bawah untuk menambahkan entri blog
                                        baru.</p> --}}

                                    <form method="post" action="/updateUmkm/{{ $umkm->id }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- @method('PUT') --}}

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Nama UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nama_umkm"
                                                    value="{{ old('nama_umkm', $umkm->nama_umkm) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Jenis Usaha</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="jenis_usaha" required>
                                                    <option value="">Pilih Jenis Usaha</option>

                                                    <optgroup label="Makanan & Minuman">
                                                        <option value="kuliner"
                                                            {{ $umkm->jenis_usaha == 'kuliner' ? 'selected' : '' }}>
                                                            Kuliner</option>
                                                        <option value="kafe"
                                                            {{ $umkm->jenis_usaha == 'kafe' ? 'selected' : '' }}>Kafe
                                                        </option>
                                                        <option value="minuman kekinian"
                                                            {{ $umkm->jenis_usaha == 'minuman kekinian' ? 'selected' : '' }}>
                                                            Minuman Kekinian</option>
                                                        <option value="catering"
                                                            {{ $umkm->jenis_usaha == 'catering' ? 'selected' : '' }}>
                                                            Catering</option>
                                                    </optgroup>

                                                    <optgroup label="Fashion & Aksesoris">
                                                        <option value="pakaian"
                                                            {{ $umkm->jenis_usaha == 'pakaian' ? 'selected' : '' }}>
                                                            Pakaian</option>
                                                        <option value="sepatu"
                                                            {{ $umkm->jenis_usaha == 'sepatu' ? 'selected' : '' }}>
                                                            Sepatu</option>
                                                        <option value="aksesoris"
                                                            {{ $umkm->jenis_usaha == 'aksesoris' ? 'selected' : '' }}>
                                                            Aksesoris</option>
                                                        <option value="hijab"
                                                            {{ $umkm->jenis_usaha == 'hijab' ? 'selected' : '' }}>Hijab
                                                        </option>
                                                    </optgroup>

                                                    <optgroup label="Jasa">
                                                        <option value="fotografi"
                                                            {{ $umkm->jenis_usaha == 'fotografi' ? 'selected' : '' }}>
                                                            Fotografi</option>
                                                        <option value="desain grafis"
                                                            {{ $umkm->jenis_usaha == 'desain grafis' ? 'selected' : '' }}>
                                                            Desain Grafis</option>
                                                        <option value="laundry"
                                                            {{ $umkm->jenis_usaha == 'laundry' ? 'selected' : '' }}>
                                                            Laundry</option>
                                                        <option value="penjahit"
                                                            {{ $umkm->jenis_usaha == 'penjahit' ? 'selected' : '' }}>
                                                            Penjahit</option>
                                                    </optgroup>

                                                    <optgroup label="Lainnya">
                                                        <option value="pertanian"
                                                            {{ $umkm->jenis_usaha == 'pertanian' ? 'selected' : '' }}>
                                                            Pertanian</option>
                                                        <option value="peternakan"
                                                            {{ $umkm->jenis_usaha == 'peternakan' ? 'selected' : '' }}>
                                                            Peternakan</option>
                                                        <option value="Perairan"
                                                            {{ $umkm->jenis_usaha == 'Perairan' ? 'selected' : '' }}>
                                                            Perairan</option>
                                                        <option value="kerajinan tangan"
                                                            {{ $umkm->jenis_usaha == 'kerajinan tangan' ? 'selected' : '' }}>
                                                            Kerajinan Tangan</option>
                                                        <option value="teknologi"
                                                            {{ $umkm->jenis_usaha == 'teknologi' ? 'selected' : '' }}>
                                                            Teknologi</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Tahun Berdiri</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="tahun_berdiri">
                                                    <option value="">Pilih Tahun</option>
                                                    @for ($year = 1800; $year <= date('Y'); $year++)
                                                        <option value="{{ $year }}"
                                                            {{ $umkm->tahun_berdiri == $year ? 'selected' : '' }}>
                                                            {{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Produk UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="produk"
                                                    value="{{ old('produk', $umkm->produk) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Alamat UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="alamat"
                                                    value="{{ old('alamat', $umkm->alamat) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Kontak UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="kontak"
                                                    value="{{ old('kontak', $umkm->kontak) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Deskripsi UMKM</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="deskripsi" rows="8">{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Tagline UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="tagline"
                                                    value="{{ old('tagline', $umkm->tagline) }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Foto UMKM</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="foto"
                                                    accept="image/*">
                                                @if ($umkm->foto)
                                                    <img src="{{ asset('storage/' . $umkm->foto) }}" class="mt-2"
                                                        width="120" alt="Foto UMKM Lama">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit" class="btn btn-primary">Update Data</button>
                                            <a href="/dataUmkm" class="btn btn-secondary">Batal</a>
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
