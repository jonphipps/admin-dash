@extends('layouts.master-admin')

@section('title')

    <title>Profiles</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/profiles">Profiles</a></li>
                    <li class="active">Profiles</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">

                    <div class="row">

                     <profile-grid></profile-grid>



    </div>

    </div>



    </section>

    </div>

    </div>



@endsection