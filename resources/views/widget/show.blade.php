@extends('layouts.master-guest')

@section('title')

    <title>{{ $widget->name }} Widget</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/widget">Widgets</a></li>
                    <li class="active">Create Widget</li>

                </ol>

            </section>

            <section class="content">

    <h1>{{ $widget->name }}</h1>

    <hr/>

    <div class="panel panel-default">

        <!-- Table -->

        <table class="table table-striped">

            <thead>
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Date Created</th>

                @if(Auth::user()->adminOrCurrentUserOwns($widget))

                    <th>Edit</th>

                @endif

                <th>Delete</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <td>{{ $widget->id }} </td>

                <td> <a href="/widget/{{ $widget->id }}/edit">
                        {{ $widget->name }}</a></td>

                <td>{{ $widget->created_at }}</td>

                @if(Auth::user()->adminOrCurrentUserOwns($widget))

                <td> <a href="/widget/{{ $widget->id }}/edit">

                        <button type="button" class="btn btn-default">

                                 Edit

                        </button></a></td>

                @endif

                <td>

                    <div class="form-group">

                        <form class="form" role="form" method="POST" action="{{ url('/widget/'. $widget->id) }}">

                            <input type="hidden" name="_method" value="delete">

                            {{ csrf_field() }}

                            <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                        </form>

                    </div>

                </td>


            </tr>

            </tbody>

        </table>


    </div>

                </section>
            </section>
        </div>

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