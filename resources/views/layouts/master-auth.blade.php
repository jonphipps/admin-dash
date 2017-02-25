<!DOCTYPE html>
<html>
<head>

    @include('layouts.auth-partials.meta')

    @yield('meta')

    @include('layouts.auth-partials.css')

    @yield('css')

    @include('layouts.auth-partials.shiv')

    @include('layouts.window-js')

</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('layouts.auth-partials.top-nav')

    @include('layouts.auth-partials.left-nav')

    @include('layouts.auth-partials.settings-panels')

    @yield('content')

    @include('layouts.common-partials.footer')

</div>

</div>

    @include('layouts.auth-partials.scripts')

    @yield('scripts')


</body>
</html>