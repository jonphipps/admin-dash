@extends('layouts.master-admin')

@section('title')

    <title>Users</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/user">Users</a></li>
                    <li class="active">Users</li>

                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content -->

            <section class="content">

                <user-grid></user-grid>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection