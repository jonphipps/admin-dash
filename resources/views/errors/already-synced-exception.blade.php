@extends('layouts.master-guest')

@section('title')

    <title>Already Synced Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Already Synced Error</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">


                    <div class="error-content">
                        <h2 class="text-red">Already Synced!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! Your account is already synced.</h3>

                        <p>
                            {{ $exception->getMessage() }}
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