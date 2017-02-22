@extends('layouts.master-guest')

@section('title')

    <title>Connection Not Accepted Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">Social Connection Error</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">


                    <div class="error-content">

                        <h2 class="text-red">Connection Not Accepted!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! We were unable to connect to your social network.</h3>

                        <p>
                            {{ $exception->getMessage() }}
                            Meanwhile, you may <a href="/">return home</a>.
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