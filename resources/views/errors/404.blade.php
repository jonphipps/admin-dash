@extends('layouts.master-guest')

@section('title')

    <title>404 Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <ol class="breadcrumb">

                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">404 Error</li>

            </ol>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="error-page">


                <div class="error-content">

                    <h2 class="text-red">404 Error</h2>
                    <h3><i class="fa fa-warning text-red"></i> Oops! Page not found.</h3>

                    <p>
                        We could not find the page you were looking for.
                        <br>
                        Meanwhile, you may <a href="/home">return to dashboard</a>.
                    </p>


                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->


        </div>

    </div>

@endsection