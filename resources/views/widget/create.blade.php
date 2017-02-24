@extends('layouts.master-guest')

@section('title')

    <title>Create a Widget</title>

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

    <div class ="col-xs-4">

    <h2>Create New Widget</h2>


    <form class="form" role="form" method="POST" action="{{ url('/widget') }}">

    {{ csrf_field() }}

    <!-- widget_name Form Input -->



        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Widget Name</label>

            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Create

            </button>

        </div>



    </form>

    </div>



            </section>

        </section>

    </div>


@endsection