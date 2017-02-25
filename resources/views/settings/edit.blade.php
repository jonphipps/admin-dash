@extends('layouts.master-auth')

@section('title')

    <title>Edit Your User Settings</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li class="active">Settings</li>

                </ol>

            </section>

            <!-- end content header -->

            <!-- content -->

            <section class="content">

                <!-- container -->

                <div class="container">

                    <div class="row">

                        <div class="col-xs-4">

                            <h1 class="myTableFont">Update {{ $user->name }}</h1>

                            @include('settings.form')

                        </div>

                    </div>

                </div>

                <!-- end container -->

            </section>

            <!-- end content -->

        </div>

        <!-- end container -->

    </div>

    <!-- content wrapper-->

@endsection