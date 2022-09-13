@php
 $bodyClass = 'dashboard';
@endphp

@extends('templates.main')

@section('main-content')

    @include('templates.dashboard.sidebar')

    <!-- Content Start -->
    <div class="content">
        @hasSection('navbar')
            @yield('navbar')
        @else
            {{-- Default Dashboard navbar--}}
            @include('templates.dashboard.navbar')
        @endif
        @yield('page-content')



       @include('templates.dashboard.footer')
    </div>
    <!-- Content End -->

@endsection
