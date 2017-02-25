@extends('layouts.master-auth')

@section('title')

    <title>Edit a Profile</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href='/determine-route-to-profile/'>{{ $profile->fullName() }}</a></li>
                    <li class="active">Create Profile</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-4">

                            <h1>Edit Profile</h1>

                            <form class="form form-border" role="form" method="POST" action="{{ url('/profile/'. $profile->id) }}">

                                <input type="hidden" name="_method" value="patch">

                            {{ csrf_field() }}

                            <!-- first_name Form Input -->

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                                    <label class="control-label">First Name</label>

                                    <input type="text" class="form-control" name="first_name"
                                           value="{{ $profile->first_name }}">

                                    @if ($errors->has('first_name'))

                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>

                                    @endif

                                </div>

                                <!-- last_name Form Input -->

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                                    <label class="control-label">Last Name</label>

                                    <input type="text" class="form-control" name="last_name"
                                           value="{{  $profile->last_name }}">

                                    @if ($errors->has('last_name'))

                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>

                                    @endif

                                </div>

                                <!-- birthdate Form Input -->

                                <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">

                                    <label class="control-label">Birthdate</label>

                                    <div>

                                        {{  Form::date('birthdate', $profile->birthdate) }}

                                    </div>


                                    @if ($errors->has('birthdate'))

                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>

                                    @endif

                                </div>

                                <!-- Gender Form Input -->

                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

                                    <label class="control-label">Gender</label>


                                    <select class="form-control" id="gender" name="gender">
                                        <option value="{{ $profile->gender }}">{{ $profile->showGender($profile->gender) }}</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>


                                    @if ($errors->has('gender'))

                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>

                                    @endif

                                </div>


                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-lg">

                                        Update

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

@endsection