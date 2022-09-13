{{--
    This is the Base of the pages.
    It should only contain the basic HTML markups
--}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('templates.main.head')
    </head>

    <body @isset($bodyClass)class="{{ $bodyClass }}"@endisset>
        <div class="container-fluid position-relative d-flex p-0">
            @include('templates.main.spinner')

            @yield('main-content')


            @empty($hideTop)
                <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            @endempty
        </div>

        @include('templates.main.foot-styles')

        @include('.templates.main.foot-scripts')

    </body>
</html>
