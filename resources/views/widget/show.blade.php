@extends('layouts.master-guest')

@section('title')

    <title>{{ $widget->name }} Widget</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Container -->

        <section class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Create Widget</li>

                </ol>

            </section>

            <!-- end content header section  -->

            <!-- content -->

            <section class="content">

                <h1>{{ $widget->name }}</h1>

                    <div class="panel panel-default">

                        @include('widget.table-show')

                    </div>

            </section>

            <!-- end content section -->

        </section>

        <!-- end Container section -->

    </div>

    <!-- end Content wrapper -->

@endsection

@section('scripts')

    <script>

        function ConfirmDelete()
        {

            var x = confirm("Are you sure you want to delete?");
            return x;

        }

    </script>

@endsection