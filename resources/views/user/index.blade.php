@extends('layouts.master-admin')

@section('title')

    <title>Users</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">


            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/user">Users</a></li>
                <li class="active">Users</li>

            </ol>

        </section>

        <!-- Main content -->

        <section class="content">

            <div class="container">

                <div class="row">

                    <user-grid></user-grid>

                </div>

            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@endsection