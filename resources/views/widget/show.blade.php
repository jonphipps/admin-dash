@extends('layouts.master-guest')

@section('title')

    <title>{{ $widget->name }} Widget</title>

@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <section class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Create Widget</li>

                </ol>

            </section>

            <!-- end content header section  -->

            <!-- content holds table-->

            <section class="content">

                <h2 class="min-width-200">{{ $widget->name }}</h2>

                    <div class="panel panel-default">

                        <!-- show table -->

                        @include('widget.table-show')

                        <!-- end table -->

                    </div>

            </section>

            <!-- end content section -->

        </section>

        <!-- end container section -->

    </div>

    <!-- end Content wrapper -->

@endsection

@section('scripts')

    <script>

        function ConfirmDelete()
        {

            return confirm("Are you sure you want to delete?");

        }

    </script>

@endsection