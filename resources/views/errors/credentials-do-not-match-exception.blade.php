@extends('layouts.master-guest')

@section('title')

    <title>Credentials Do Not Match Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">Credentials Do Not Match Error</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">

                    <div class="error-content">
                        <h2 class="text-red">Credentials Do Not Match!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! Your credentials do not match.</h3>

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