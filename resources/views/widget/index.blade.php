@extends('layouts.master-guest')

@section('title')

    <title>Widgets</title>

@endsection


@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- container -->

        <section class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Widgets</li>

                </ol>

            </section>

            <!-- end content header -->

                <!-- content -->

                <section class="content">

                    <widget-grid></widget-grid>

                </section>

                <!-- end content -->

        </section>

        <!-- end section container -->

    </div>

    <!-- end Content Wrapper -->

@endsection