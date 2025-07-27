<!-- ========== JAVASCRIPT LIBRARIES ========== -->

<!-- Core Libraries -->
<script src="{{ asset('assetsAdmin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- ApexCharts -->
<script src="{{ asset('assetsAdmin/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Dashboard Initialization -->
<script src="{{ asset('assetsAdmin/js/pages/dashboard.init.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('assetsAdmin/js/app.js') }}"></script>

<!-- ========== DATATABLES ========== -->

<!-- Datatables Core -->
<script src="{{ asset('assetsAdmin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Datatables Buttons -->
<script src="{{ asset('assetsAdmin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Datatables Responsive -->
<script src="{{ asset('assetsAdmin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable Initialization -->
<script src="{{ asset('assetsAdmin/js/pages/datatables.init.js') }}"></script>

<!-- ========== THIRD-PARTY PLUGINS ========== -->

<!-- Toastr CSS     -->
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "4000"
    };

    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @elseif (session('error'))
        toastr.error("{{ session('error') }}");
    @elseif (session('info'))
        toastr.info("{{ session('info') }}");
    @elseif (session('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
