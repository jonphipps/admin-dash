<!DOCTYPE html>
<html>
<head>

    @include('layouts.admin-partials.meta-admin')

    @yield('meta')

    @include('layouts.admin-partials.css-admin')

    @yield('css')

    @include('layouts.admin-partials.shiv-admin')

    @include('layouts.window-js')

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <div id="app">

    @include('layouts.admin-partials.top-nav-admin')

    @include('layouts.admin-partials.left-nav-admin')

    @include('layouts.admin-partials.settings-panels-admin')

    @yield('content')

    @include('layouts.common-partials.footer')



    </div>

</div>

    @include('layouts.admin-partials.scripts-admin')

    @yield('scripts')

</body>
</html>