@include('layouts.partial.header')

@include('layouts.partial.navbar')

<div id="wrapper">
    @include('layouts.partial.sidebar')
        @yield('content')
</div>

@include('layouts.partial.footer')
