{{-- Default Styles for global use--}}
{{-- Google Web Fonts --}}
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

{{-- Icon Font Stylesheet --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

{{-- Libraries Stylesheet --}}
<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"/>

{{-- Customized Bootstrap Stylesheet --}}
{{--    <link href="css/bootstrap.min.css" rel="stylesheet">--}}

{{-- Template Stylesheet --}}
<link href="{{mix('css/app.css')}}" rel="stylesheet">

{{-- Styles Specific to a child page should conjure this section --}}
@yield('head-styles')
