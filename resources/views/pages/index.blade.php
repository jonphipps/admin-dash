
@extends('layouts.master-guest')


@section('content')


    <!-- Full Width Column -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    Super Clean
                    <small>Example 2.0</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Landing</a></li>
                    <li class="active">Site Landing Page</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="callout callout-info">
                    <h4>Tip!</h4>

                    <p>This will be your applications home page when the user is logged out.  When the user is logged in,
                    they will be directed to the home route, which will be a different page.</p>
                </div>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h1>Foundation Maker Helps You Get Started</h1>
                    </div>
                    <div class="box-body">
                        Let's make something great...
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->


    @endsection

