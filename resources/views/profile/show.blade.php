@extends('layouts.master-auth')

@section('title')

    <title>Profile</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/determine-profile-route">Profile</a></li>
                    <li class="active">Create Profile</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-8">

                            <h1 class="myTableFont">{{ $profile->fullName() }}</h1>

                            <img src="{{ Gravatar::get(Auth::user()->email)  }}"
                                 class="img-circle"
                                 alt="User Image">

                            <div class="panel panel-default grid-results">
                                <div class="box-body table-responsive no-padding">
                                <!-- Table -->
                                <table class="table table-striped">
                                    <tr>

                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Birthdate</th>

                                        @if(Auth::user()->adminOrCurrentUserOwns($profile))

                                         <th>Edit</th>
                                        <th>Delete</th>

                                        @endif

                                    </tr>


                                    <tr>
                                        <td>{{ $profile->id }} </td>
                                        <td><a href="/profile/{{ $profile->id }}/edit">
                                                {{ $profile->fullName() }}</a></td>
                                        <td>{{ $profile->showGender($profile->gender) }}</td>
                                        <td>{{ $profile->birthdate->format('m-d-Y') }}</td>

                                        @if(Auth::user()->adminOrCurrentUserOwns($profile))

                                            <td><a href="/profile/{{ $profile->id }}/edit">

                                                    <button type="button"
                                                            class="btn btn-default">Edit</button>
                                                </a></td>


                                            <td>
                                                <div class="form-group">

                                                    <form class="form"
                                                          role="form"
                                                          method="POST"
                                                          action="{{ url('/profile/'. $profile->id) }}">
                                                        <input type="hidden"
                                                               name="_method"
                                                               value="delete">
                                                        {{ csrf_field() }}

                                                        <input class="btn btn-danger"
                                                               Onclick="return ConfirmDelete();"
                                                               type="submit"
                                                               value="Delete">

                                                    </form>
                                                </div>
                                            </td>

                                        @endif



                                    </tr>

                                </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>

    </div>

@endsection
@section('scripts')
    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection