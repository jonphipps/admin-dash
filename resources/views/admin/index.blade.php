@extends('layouts.master-admin')

@section('title')

    <title>Admin Dash</title>

@endsection

@section('css')

    @include('layouts.admin-partials.css-dash')

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- content-header has breadcrumbs -->

        <section class="content-header">

            <h1>

                Dashboard

                <small>Control panel</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>

            </ol>

        </section>

        <!-- end content-header section -->

        <!-- dashboard components -->

        @include('admin.components.admin-v1.dash')

        <!-- end dashboard components -->

    </div>

    <!--  end content-wrapper -->

@endsection

@section('scripts')

    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>

@endsection






