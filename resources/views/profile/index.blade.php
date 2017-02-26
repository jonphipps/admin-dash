@extends('layouts.master-admin')

@section('title')

    <title>Profiles</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/profiles">Profiles</a></li>
                    <li class="active">Profiles</li>

                </ol>

            </section>

            <!-- end content header -->

            <!-- content holds data grid -->

            <section class="content">

                <profile-grid></profile-grid>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->



@endsection