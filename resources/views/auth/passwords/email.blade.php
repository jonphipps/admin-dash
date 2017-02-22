@extends('layouts.master-guest')

@section('title')

    <title>Login</title>

@endsection

@section('css')

    <style>

        .submit-email-button{


            margin-top:  20px;

            margin-left:  70px;

        }

    </style>

    @endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

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

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="login-logo">
                <a href="/"><b>Reset</b> PASSWORD</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Enter your email for password recovery</p>

                <form role="form" method="POST" action="{{ url('/password/email') }}">

                    {{ csrf_field() }}

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

                            <div class="submit-email-button">

                                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>

                            </div>


                            <!-- /.col -->

                        </div>



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