@extends('layouts.master-auth')

@section('title')

    <title>Profile</title>

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
                    <li><a href="/determine-profile-route">Profile</a></li>
                    <li class="active">Create Profile</li>

                </ol>

            </section>

            <!-- end content-header -->

            <!-- content has table -->

            <section class="content">

                        <div class="col-xs-8">

                            <!-- user name -->

                            <h2 class="min-width-200">{{ $profile->fullName() }}</h2>

                            <!-- end user name -->

                            <!-- user gravatar-->

                            <img src="{{ Gravatar::get(Auth::user()->email)  }}"
                                 class="img-circle"
                                 alt="User Image">

                            <!-- end user gravatar -->

                            <div class="panel panel-default margin-bottom-10">

                                <div class="box-body table-responsive no-padding">

                                    <!-- show table -->

                                    @include('profile.table-show')

                                    <!-- end show table -->

                                </div>

                            </div>

                        </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')

    <script>

        function ConfirmDelete() {

            return confirm("Are you sure you want to delete?");

        }

    </script>

@endsection