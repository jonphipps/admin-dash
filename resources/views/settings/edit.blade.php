@extends('layouts.master-auth')

@section('title')

    <title>Edit Your User Settings</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">


                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li class="active">Settings</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-4">


                            <h1 class="myTableFont">Update {{ $user->name }}</h1>

                            <form class="form" role="form" method="POST" action="{{ url('/settings') }}">

                            {{ csrf_field() }}

                            <!-- name Form Input -->

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <label class="control-label">User Name</label>

                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                                    @if ($errors->has('name'))

                                        <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                        </span>

                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">E-Mail Address</label>

                                    <div>
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ $user->email }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- is_subscribed Form Input -->

                                <div class="form-group{{ $errors->has('is_subscribed') ? ' has-error' : '' }}">

                                    <label class="control-label">Is Subscribed?</label>


                                    <select class="form-control" id="is_subscribed" name="is_subscribed">
                                        <option value="{{ $user->is_subscribed }}">{{ $user->is_subscribed == 1 ? 'Yes' : 'No' }}</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>


                                    @if ($errors->has('is_subscribed'))

                                        <span class="help-block">
                                            <strong>{{ $errors->first('is_subscribed') }}</strong>
                                        </span>

                                    @endif

                                </div>

                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-lg">

                                        Update

                                    </button>

                                </div>

                                <div class="pull-left">

                                    <a href="{{ url('/password/reset') }}">

                                        <button type="button" class="btn btn-lg btn-warning">

                                            Reset Password

                                        </button>

                                    </a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

@endsection