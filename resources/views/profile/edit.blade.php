@extends('layouts.master-auth')

@section('title')

    <title>Edit a Profile</title>

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
                    <li><a href='/determine-route-to-profile/'>{{ $profile->fullName() }}</a></li>
                    <li class="active">Create Profile</li>

                </ol>

            </section>

            <!-- content has form -->

            <section class="content">

                <div class="col-xs-4">

                    <h2 class="min-width-200">Edit Profile</h2>

                        <!-- edit form -->

                        @include('profile.edit-form')

                        <!-- end edit form -->

                </div>

            </section>

            <!-- end content -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection