@extends('layouts.master-admin')

@section('title')

    <title>{{ $marketingImage->name }}</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/marketing-image">Marketing Images</a></li>
                    <li class="active">{{ $marketingImage->image_name }}</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">

    <h1>Marketing Image -- {{ $marketingImage->image_name }}</h1>



    <hr/>

    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped">

            <tr>

                <th>Thumbnail</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

                </td>

            </tr>

            <tr>

                <th>Active?</th>

            </tr>

            <tr>

                <td>{{ $marketingImage->showActiveStatus($marketingImage->is_active) }}</td>

            </tr>

            <tr>

                <th>Featured?</th>

            </tr>

            <tr>

                <td>{{ $marketingImage->showFeaturedStatus($marketingImage->is_featured) }}</td>

            </tr>

            <tr>

                <th>Image Weight</th>

            </tr>

            <tr>

                <td>{{ $marketingImage->image_weight }}</td>

            </tr>

            <tr>

                <th>Primary Image</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $marketingImage->showImage($marketingImage, $imagePath) }}" style="max-width: 600px;">

                </td>
            </tr>

            <tr>
                <td>

                    <div class="pull-left">


                        <a href="/marketing-image/{{ $marketingImage->id }}/edit">

                            <button type="button" class="btn btn-primary btn-lg">Edit Image</button></a>
                       <br>
                        <br>

                        <form class="form" role="form" method="POST" action="{{ url('/marketing-image/'. $marketingImage->id) }}">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}

                            <button class="btn btn-danger btn-lg" Onclick="return ConfirmDelete();" type="submit">
                                Delete
                                </button>

                        </form>
                    </div>

                </td>

            </tr>

        </table>

    </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

@endsection
@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");

            if (x){

                return true;

            } else {

                return false;

            }

        }
    </script>
@endsection