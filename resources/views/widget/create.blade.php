@extends('layouts.master-guest')

@section('title')

    <title>Create a Widget</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="container">

            <!-- Container -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Create Widget</li>

                </ol>

            </section>

            <!-- end section Content Header -->

            <section class="content">

                <div class ="col-xs-4">

                    <h2>Create New Widget</h2>

                        @include('widget.create-form')

                </div>

            </section>

            <!-- end section Content -->

        </section>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->


@endsection