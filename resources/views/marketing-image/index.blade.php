@extends('layouts.master-auth')


@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">


            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/marketing-image">Marketing Images</a></li>
                <li class="active">Marketing Images</li>

            </ol>

        </section>
<!-- Main content -->
<section class="content">
    <div class="container">
    <div class="row">

        <marketing-image-grid></marketing-image-grid>

    </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection