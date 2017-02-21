@extends('layouts.master-guest')

@section('title')

    <title>Register</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header container">



            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/register">Register</a></li>
                <li class="active">Register</li>

            </ol>

        </section>


        <div class="register-box">
            <div class="register-logo">
                <a href="/"><b>Foundation</b>MAKER</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form  method="POST" action="{{ url('/register') }}">

                    {{ csrf_field() }}

                    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name"
                               name="name"
                               type="text"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Full Name"
                               required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email"
                               type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="email"
                               required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

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

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox">
                                <label class="{{ $errors->has('terms') ? ' has-error' : '' }}">
                                    <input type="checkbox" name="terms" required> I agree to the <a href="/terms">terms</a>
                                </label>

                                @if ($errors->has('terms'))
                                    <span class="help-block"><strong>{{ $errors->first('terms') }}</strong></span>
                                @endif

                            </div>
                        </div>

                        <div class="col-xs-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_subscribed"> Subscribe to Newsletter?
                                </label>
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->

                    </div>

                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="/auth/facebook" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="/auth/github" class="btn btn-block btn-social btn-github">
                        <i class="fa fa-github"></i> Sign in with GitHub
                    </a>
                </div>

                <a href="/login" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->



    </div>

@endsection

