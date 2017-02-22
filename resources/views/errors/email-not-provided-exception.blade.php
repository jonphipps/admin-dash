@extends('layouts.master-guest')

@section('title')

    <title>Email Not Provided Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">



                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">Email Not Provided</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">


                    <div class="error-content">

                        <h2 class="text-red">Email Not Provided!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! Your email was not provided by your social provider.</h3>

                        <p>
                            You should check to see if your settings allow your email to be public in your social provider's settings.
                            Meanwhile, you may <a href="/">return home</a>.
                            {{ $exception->getMessage() }}

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