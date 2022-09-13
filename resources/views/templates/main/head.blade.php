<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

{{-- CSRF TOKEN --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
    @hasSection('page-title')
        @yield('page-title')
    @else
        Scoreboard | Main
    @endif
</title>


{{-- SEO Thingy --}}
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="{{ asset('img/scoreboard-favicon.ico') }}" rel="icon">

@include('templates.main.head-styles')

@include('templates.main.head-scripts')

