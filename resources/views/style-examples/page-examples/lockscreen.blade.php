@extends('layouts.master-admin')

@section('title')

    <title>Lockscreen</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>

                Lockscreen

                <small>example</small>

            </h1>

            <ol class="breadcrumb">

                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/lockscreen">Lockscreen</a></li>
                <li class="active">Lockscreen</li>

            </ol>

        </section>


        <!-- Automatic element centering -->
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <a href="/admin"><b>Admin</b>LTE</a>
            </div>
            <!-- User name -->
            <div class="lockscreen-name">John Doe</div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <form class="lockscreen-credentials">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="password">

                        <div class="input-group-btn">
                            <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /.lockscreen credentials -->

            </div>
            <!-- /.lockscreen-item -->
            <div class="help-block text-center">
                Enter your password to retrieve your session
            </div>
            <div class="text-center">
                <a href="login.html">Or sign in as a different user</a>
            </div>


        </div>

    </div>


    @endsection