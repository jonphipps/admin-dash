@extends('layouts.master-admin')

@section('title')

    <title>Profiles</title>

@endsection

@section('content')

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="/profiles">Profiles</a></li>
                    <li class="active">Profiles</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-8">

                            <h1 class="myTableFont">Profiles</h1>

    @if($profiles->count() > 0)

        <table class="table table-hover table-bordered table-striped">

            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            </thead>

            <tbody>

            @foreach($profiles as $profile)

                <tr>
                    <td>{{ $profile->id }}</td>
                    <td><a href="/profile/{{ $profile->id }}">{{ $profile->fullName() }}</a></td>
                    <td>{{ $profile->showGender($profile->gender) }}</td>
                    <td>{{ $profile->birthdate->format('m-d-Y') }}</td>

                </tr>

            @endforeach

            </tbody>

        </table>



    @else

        <div>Sorry, no profiles</div>

    @endif

    {{ $profiles->links() }}

    </div>

    </div>

    </div>

    </section>

    </div>

    </div>



@endsection