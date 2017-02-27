@extends('layouts.master-admin')

@section('title')

    <title>Edit a User</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <div class="container">


            <!-- content-header has breadcrumbs -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/user/{{ $user->id }}">User</a></li>
                    <li class="active">Edit User</li>

                </ol>

            </section>

            <!-- content -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Edit User</h2>

                    <!-- edit form -->

                    @include('user.edit-form')

                    <!-- end edit form -->

                </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection