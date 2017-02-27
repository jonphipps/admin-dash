@extends('layouts.master-auth')

@section('title')

    <title>Edit Your User Settings</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li class="active">Settings</li>

                </ol>

            </section>

            <!-- end content header -->

            <!-- content has form -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Update {{ $user->name }}</h2>

                        <!-- settings form -->

                        @include('settings.form')

                        <!-- end settings form -->

                </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- content wrapper-->

@endsection