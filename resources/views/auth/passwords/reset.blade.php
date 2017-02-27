@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('content')

    <!-- content wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content header has breadcrumbs -->

            <section class="content-header">

            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/password/reset">Reset Password</a></li>
                <li class="active">Reset Password</li>

            </ol>

            </section>

            <!-- end content header -->

            <!-- content has form -->

            <section class="content">

                <!-- login-box -->

                <div class="login-box">

                    <!-- login-logo -->

                    <div class="login-logo">

                        <a href="/"><b>Reset</b> PASSWORD</a>

                    </div>

                    <!-- end login-logo -->

                    <!-- login-box-body -->

                    <div class="login-box-body">

                        @if (session('status'))

                            <div class="alert alert-success">

                                {{ session('status') }}

                            </div>

                        @endif

                        <p class="login-box-msg">Enter your new password and confirm</p>

                        <!-- reset form -->

                        @include('auth.passwords.reset-form')

                        <!-- end reset form -->

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