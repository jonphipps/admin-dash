<!DOCTYPE html>
<html>
<head>

    @include('layouts.guest-partials.meta')

        @yield('title')

    @include('layouts.guest-partials.css')

    @yield('css')

    @include('layouts.guest-partials.shim')


</head>

<body class="hold-transition skin-blue layout-top-nav">

<div class="body-fill">

    @include('layouts.guest-partials.top-nav-2')

    @yield('content')

    @include('layouts.guest-partials.footer')

    @include('layouts.guest-partials.scripts')



</div>


</body>

</html>