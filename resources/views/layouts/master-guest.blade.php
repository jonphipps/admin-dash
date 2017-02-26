<!DOCTYPE html>
<html>
<head>

    @include('layouts.guest-partials.meta')

    @yield('title')

    <!-- guest-partials.css index page css -->

    @include('layouts.guest-partials.css')

    @yield('css')

    @include('layouts.guest-partials.shim')

    @include('layouts.window-js')


</head>

<body class="hold-transition skin-blue layout-top-nav">

<!-- body-fill for consistency with /home view -->

<div class="body-fill">

    @include('layouts.guest-partials.facebook')

    <!-- app Vue.js wrapper -->

    <div id="app">

        @include('layouts.guest-partials.top-nav')

        <!-- top-pin-pad -->

        <div class="top-pin-pad">

            @yield('content')

            @include('layouts.guest-partials.footer')

        </div>

        <!-- end top-pin-pad -->

    </div>

    <!-- end app Vue.js wrapper -->

    @include('layouts.guest-partials.scripts')

    @yield('scripts')

</div>

<!-- end body-fill -->

</body>

</html>