@extends('layouts.master-admin')

@section('title')

    <title>{{ $marketingImage->name }}</title>

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
                    <li><a href="/marketing-image">Marketing Images</a></li>
                    <li class="active">{{ $marketingImage->image_name }}</li>

                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content -->

            <section class="content">

                <h2>Marketing Image -- {{ $marketingImage->image_name }}</h2>

                    <div class="panel panel-default">

                        @include('marketing-image.table-show')


                    </div>

            </section>

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