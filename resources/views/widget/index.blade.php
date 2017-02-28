@extends('layouts.master-guest')

@section('title')

    <title>Widgets</title>

@endsection


@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <section class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">

                <breadcrumbs :url="{{ json_encode('/widget') }}"
                             :name="{{ json_encode('Widget') }}"
                             :plural="{{ json_encode('Widgets') }}"></breadcrumbs>

            </section>

            <!-- end content header -->

                <!-- content holds table-->

                <section class="content">

                    <widget-grid></widget-grid>

                </section>

                <!-- end content table -->

        </section>

        <!-- end container section -->

    </div>

    <!-- end Content Wrapper -->

@endsection