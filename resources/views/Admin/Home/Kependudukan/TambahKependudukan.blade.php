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
                                <h4 class="mb-0">Form Tambah Data Penduduk</h4>

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

                                    <h4 class="card-title">Input Data Kependudukan DESA</h4>
                                    {{-- <p class="card-title-desc">Isi semua kolom di bawah untuk menambahkan entri blog
                                        baru.</p> --}}

                                    <form method="post" action="/storependuduk"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Umur</label>
                                            <input type="number" class="form-control" name="umur" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki">
                                                <label class="form-check-label" for="laki-laki">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan">
                                                <label class="form-check-label" for="perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        
                                      <!-- Dusun Dropdown -->
<div class="mb-3">
    <label class="form-label">Dusun</label>
    <select class="form-select" name="dusun" id="dusun" onchange="updateRW()">
        <option value="">--Pilih Dusun--</option>
        <option value="Kemiri">Kemiri</option>
        <option value="Janti">Janti</option>
        <option value="Gendol">Gendol</option>
        <option value="Pakunden">Pakunden</option>
        <option value="Mojolengko">Mojolengko</option>
    </select>
</div>

<!-- RW Dropdown -->
<div class="mb-3">
    <label class="form-label">RW</label>
    <select id="rw" class="form-select" name="rw_id" onchange="updateRT()">
        <option value="">--Pilih RW--</option>
    </select>
</div>

<!-- RT Dropdown -->
<div class="mb-3">
    <label class="form-label">RT</label>
    <select id="rt" class="form-select" name="rt_id">
        <option value="">--Pilih RT--</option>
    </select>
</div>

<script>
    const rwData = @json($rw); // kirim RW beserta RT-nya ke JavaScript

    function updateRW() {
        const selectedDusun = document.getElementById('dusun').value;
        const rwSelect = document.getElementById('rw');
        const rtSelect = document.getElementById('rt');

        // Kosongkan RW dan RT
        rwSelect.innerHTML = '<option value="">--Pilih RW--</option>';
        rtSelect.innerHTML = '<option value="">--Pilih RT--</option>';

        // Tambahkan RW yang sesuai dusun
        rwData
            .filter(rw => rw.dusun === selectedDusun)
            .forEach(rw => {
                const option = new Option(rw.no_rw, rw.id);
                rwSelect.add(option);
            });
    }

    function updateRT() {
        const selectedRwId = document.getElementById('rw').value;
        const rtSelect = document.getElementById('rt');

        // Kosongkan RT
        rtSelect.innerHTML = '<option value="">--Pilih RT--</option>';

        const rw = rwData.find(rw => rw.id == selectedRwId);
        if (rw && rw.rt && rw.rt.length > 0) {
            rw.rt.forEach(rt => {
                const option = new Option(rt.no_rt, rt.id);
                rtSelect.add(option);
            });
        }
    }
</script>


                                        

                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan</label>
                                            <select class="form-select" name="pekerjaan">
                                            
                                                <option value="Petani">Petani</option>
                                                <option value="Pedagang">Pedagang</option>
                                                <option value="PNS">PNS</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Buruh">Buruh</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan</label>
                                            <select class="form-select" name="pendidikan">
                                              
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Agama</label>
                                            <select class="form-select" name="agama">
                                             
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Status Perkawinan</label>
                                            <select class="form-select" name="status_perkawinan">
                                            
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Kawin">Kawin</option>
                                                <option value="Cerai Hidup">Cerai Hidup</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-md">Simpan
                                                Data Penduduk</button>
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
                                    href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
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
    <script>
    const laki = document.getElementById('laki');
    const perempuan = document.getElementById('perempuan');
    const total = document.getElementById('total');

    function updateTotal() {
        const valLaki = parseInt(laki.value) || 0;
        const valPerempuan = parseInt(perempuan.value) || 0;
        total.value = valLaki + valPerempuan;
    }

    laki.addEventListener('input', updateTotal);
    perempuan.addEventListener('input', updateTotal);

    // Inisialisasi saat halaman dimuat
    window.addEventListener('DOMContentLoaded', updateTotal);
    </script>

</body>

</html>
