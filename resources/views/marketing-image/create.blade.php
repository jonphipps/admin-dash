@extends('layouts.master-admin')

@section('title')

    <title>Create a Marketing Image</title>

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
                    <li class="active">Marketing Images</li>

                </ol>

            </section>

            <!-- end content-header -->

            <!-- content has form -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Create Image</h2>

                    <!-- create form -->

                    @include('marketing-image.create-form')

                    <!-- end create form -->

                </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection