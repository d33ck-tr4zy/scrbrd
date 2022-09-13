<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('dashboard') }}" class="navbar-brand mx-1 mb-3">
            <img src="{{ asset('img/scoreboard-logo-red.png') }}" alt="" />
        </a>

        <div class="navbar-nav w-100">
            @include('templates.dashboard.sidebar.menu')
        </div>
    </nav>
</div>
<!-- Sidebar End -->
