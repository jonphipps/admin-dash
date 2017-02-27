@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('css')

    <style>



    </style>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/password/reset">Reset Password</a></li>
                    <li class="active">Reset Password</li>

                </ol>

            </section>

            <!-- end content-header -->

            <!-- content -->

            <section class="content">

                <!-- login-box -->

                <div class="login-box">

                        @if (session('status'))

                        <div class="alert alert-success">

                            {{ session('status') }}

                        </div>

                        @endif

                    <!-- login-logo -->

                    <div class="login-logo">

                        <a href="/"><b>Reset</b> PASSWORD</a>

                    </div>

                    <!-- end login-logo -->

                    <!-- login-box-body -->

                    <div class="login-box-body">

                        <p class="login-box-msg">Enter your email for password recovery</p>

                        <!-- email-form -->

                        @include('auth.passwords.email-form')

                        <!-- end email-form -->

                    </div>

                    <!-- end login-box-body -->

                </div>

                <!-- end login-box -->

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection