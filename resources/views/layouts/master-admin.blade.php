<!DOCTYPE html>
<html>
<head>

    @include('layouts.admin-partials.meta-admin')

    @yield('meta')

    @include('layouts.admin-partials.css-admin')

    @yield('css')

    @include('layouts.admin-partials.shiv-admin')

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    @include('layouts.admin-partials.top-nav-admin')

    @include('layouts.admin-partials.left-nav-admin')

    @include('layouts.admin-partials.settings-panels-admin')

    @yield('content')

    @include('layouts.admin-partials.footer-admin')

    @include('layouts.admin-partials.scripts-admin')

    @yield('scripts')

</div>

</body>
</html>