<!-- ========== JAVASCRIPT LIBRARIES ========== -->

<!-- Cloudflare Email Decode -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<!-- Core JS -->
<script src="{{ asset('LandingPageOri/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('LandingPageOri/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('LandingPageOri/assets/js/plugin.js') }}"></script>
<script src="{{ asset('LandingPageOri/assets/js/main.js') }}"></script>
<script src="{{ asset('LandingPageOri/assets/js/custom-swiper.js') }}"></script>
<script src="{{ asset('LandingPageOri/assets/js/custom-nav.js') }}"></script>

<!-- Cloudflare Beacon -->
<script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{
        "version": "2024.11.0",
        "token": "e2e296138d64407b8469055f5cbf0b42",
        "r": 1,
        "server_timing": {
            "name": {
                "cfCacheStatus": true,
                "cfEdge": true,
                "cfExtPri": true,
                "cfL4": true,
                "cfOrigin": true,
                "cfSpeedBrain": true
            },
            "location_startswith": null
        }
    }'
    crossorigin="anonymous">
</script>

<!-- ========== TOASTR ========== -->

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "4000"
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
