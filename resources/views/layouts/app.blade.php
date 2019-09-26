
@include('layouts.header')
@yield('header')

    @include('layouts.sidebar')
    @include('layouts.nav')

        @yield('contents')

@include('layouts.footer')
@yield('footer')
