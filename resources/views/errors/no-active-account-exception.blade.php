@extends('layouts.master-guest')

@section('title')

    <title>No Active Account Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">



                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">No Active Account</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">


                    <div class="error-content">

                        <h2 class="text-red"> No Active Account!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! You don't seem to have an active account.</h3>

                        <p>
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