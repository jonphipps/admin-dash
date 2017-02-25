@extends('layouts.master-admin')

@section('title')

    <title>{{ $user->name }}</title>

@endsection

@section('content')


    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">


            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/user/{{ $user->id }}">User</a></li>
                <li class="active">Show User</li>

            </ol>

        </section>

        <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <div class="margin-top-20">
                    <h1>{{ $user->name }}</h1>
                </div>

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Profile</th>
                                <th>Email</th>
                                <th>Subscribed</th>
                                <th>Admin</th>
                                <th>Status</th>
                                <th>Created</th>
                                @if(Auth::user()->adminOrCurrentUserOwns($user))
                                    <th>Edit</th>

                                    <th>Delete</th>

                                @endif
                            </tr>
                            <tr>
                                <td>{{ $user->id }} </td>

                                <td><a href="/user/{{ $user->id }}/edit">
                                        {{ $user->name }}</a></td>

                                @if (isset($profile->id))

                                    <td><a href="/profile/{{ $profile->id }}">
                                            {{$user->profile->fullName()}}</a></td>
                                @else

                                    <td>none</td>

                                @endif

                                <td>{{ $user->email }}</td>
                                <td>{{ $user->showNewsletterStatusOf($user) }}</td>
                                @if( $user->showAdminStatusOf($user) == 'Yes')

                                    <td><span class="label label-primary">Yes</span></td>

                                @else

                                    <td><span class="label label-warning">No</span></td>


                                @endif
                                @if( $user->showStatusOf($user) == 'Active')

                                    <td><span class="label label-primary">Active</span></td>

                                    @else

                                    <td><span class="label label-warning">Inactive</span></td>


                                @endif
                                <td>{{ $user->created_at->format('m-d-Y') }}</td>

                                @if(Auth::user()->adminOrCurrentUserOwns($user))

                                    <td><a href="/user/{{ $user->id }}/edit">

                                            <button type="button" class="btn btn-default">Edit</button>
                                        </a></td>

                                    <td>

                                        <form class="form" role="form" method="POST"
                                              action="{{ url('/user/'. $user->id) }}">
                                            <input type="hidden" name="_method" value="delete">
                                            {{ csrf_field() }}

                                            <input class="btn btn-danger" Onclick="return ConfirmDelete();"
                                                   type="submit" value="Delete">

                                        </form>

                                    </td>

                                @endif


                            </tr>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        </div>



    </div>



@endsection

@section('scripts')

    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            return x;
        }
    </script>

@endsection