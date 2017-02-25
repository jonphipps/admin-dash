@extends('layouts.master-guest')

@section('title')

    <title>Edit Widget</title>

@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Edit Widget</li>

                </ol>

            </section>

            <section class="content">

                <div class ="col-xs-4">

                    <h1>Edit Widget</h1>

@include('widget.edit-form')

    </div>

    </section>

    </section>

    </div>

@endsection