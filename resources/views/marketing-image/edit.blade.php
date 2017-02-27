@extends('layouts.master-admin')

@section('title')

    <title>Edit a Marketing Image</title>

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

            <!-- content has form -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Edit Image</h2>

                    <!-- begin form border -->

                    <div class="form-border">

                        <div>

                            <div class="control-label">

                                Image Name:

                            </div>

                                <h4>

                                    {{ $marketingImage->image_name
                                        . '.'
                                        . $marketingImage->image_extension }}

                                </h4>

                        </div>

                        <div class="control-label">

                            Thumbnail:

                        </div>

                        <!-- image thumbnail -->

                        <div class="margin-top-10 margin-bottom-10">

                            <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

                        </div>

                        <!-- end image thumbnail -->

                        <!-- edit form with update button -->

                        @include('marketing-image.edit-form')

                        <!-- end edit form with update button -->

                        <!-- delete button outside other form,
                          but included in form border -->

                        @include('marketing-image.delete-button')

                        <!-- end delete button -->

                    </div>

                    <!-- end form border -->

                </div>

                <!-- end col-xs-4 -->

            </section>

            <!-- end content-->

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