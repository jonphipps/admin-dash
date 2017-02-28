<!-- Main content -->

<section class="content">

        @include('admin.components.admin-v1.info-boxes')

        @include('admin.components.admin-v1.chart-progress')

    <!-- Main row -->

    <div class="row">

        <!-- Left col -->

        <div class="col-md-8">

            @include('admin.components.admin-v1.map')

            @include('admin.components.admin-v1.chat')

            @include('admin.components.admin-v1.latest-orders')

        </div>
        <!--  end .col -->

        <!-- Right col -->

        <div class="col-md-4">

            @include('admin.components.admin-v1.stack')

            @include('admin.components.admin-v1.browser-usage')

            @include('admin.components.admin-v1.recent-products')

        </div>

        <!-- /.col -->
    </div>

    <!-- /.row -->

</section>

<!-- /.content -->