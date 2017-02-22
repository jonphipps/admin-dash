@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('css')

    <style>

        .reset-password-button{


            margin-top:  20px;

            margin-left:  95px;

        }

    </style>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/password/reset">Reset Password</a></li>
                <li class="active">Reset Password</li>

            </ol>

            </section>

        <section class="content">

        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>Reset</b> PASSWORD</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="login-box-msg">Enter your new password and confirm</p>

                <form role="form" method="POST" action="{{ route('password.request') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="form-group has-feedback">

                            <input id="email"
                                   type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="enter your email..."
                                   required autofocus>



                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>


                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password"
                                       type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Password"
                                       required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group has-feedback">
                                <input  id="password-confirm"
                                        name="password_confirmation"
                                        type="password"
                                        class="form-control"
                                        placeholder="Retype password"
                                        required>
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                            </div>

                            <div class="reset-password-button">

                                <button type="submit" class="btn btn-primary">Reset Password</button>

                            </div>


                            <!-- /.col -->

                    </div>


                </form>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        </section>


        </div>

    </div>


@endsection