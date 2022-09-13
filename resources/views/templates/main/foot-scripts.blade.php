{{--
    Place the Global foot script here

--}}

{{-- JavaScript Libraries --}}
{{--<script src="{{asset('lib/chart/chart.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/easing/easing.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>--}}
{{--<script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>--}}

{{-- Main Lv JS --}}
<script src="{{ mix('js/app.js') }}" defer></script>

{{-- Additional foot script for page base scripts to load dynamically --}}
@yield('foot-scripts')
