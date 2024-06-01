<script>
    const BASE_URL = "{{ url('') }}"
</script>
<script src="{{ public_asset('assets/front/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ public_asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ public_asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ public_asset('assets/front/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ public_asset('assets/front/plugins/slider/js/owl.carousel.min.js') }}"></script>
<script src="{{ public_asset('assets/front/js/script.js') }}"></script>
@stack('scripts')
