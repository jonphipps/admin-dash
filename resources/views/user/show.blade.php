@extends('layouts.master-admin')

@section('title')

    <title>{{ $user->name }}</title>

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
                    <li><a href="/user/{{ $user->id }}">User</a></li>
                    <li class="active">Show User</li>

                </ol>

            </section>

            <!-- end content-header -->

            <!-- content holds table-->

            <section class="content">

                <!-- user name -->

                <div class="margin-10">

                    <h2 class="min-width-200">{{ $user->name }}</h2>

                </div>

                <!-- end user name -->

                <div class="panel panel-default">

                    <!-- show table -->

                    @include('user.table-show')

                    <!-- end show table -->

                </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')

    <script>

        function ConfirmDelete() {

            return confirm("Are you sure you want to delete?");

        }

    </script>

@endsection