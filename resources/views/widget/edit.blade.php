@extends('layouts.master-guest')

@section('title')

    <title>Edit Widget</title>

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
                    <li class="active">Edit Widget</li>

                </ol>

            </section>

            <section class="content">

                <div class ="col-xs-4">

                    <h1>Create Widget</h1>

    <form class="form" role="form" method="POST" action="{{ url('/widget/'. $widget->id) }}">

        {{ method_field('PATCH') }}

        {{ csrf_field() }}

    <!-- widget name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Widget Name</label>

            <input type="text" class="form-control" name="name" value="{{ $widget->name }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Edit

            </button>

        </div>

    </form>

    </div>

    </section>

    </section>

    </div>

@endsection