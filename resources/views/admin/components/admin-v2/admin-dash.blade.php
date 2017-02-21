    <!-- Main content -->

    <section class="content">

    @include('admin.components.admin-v2.admin-large-stat-boxes')

        <!-- Main row -->

        <div class="row">

            <!-- Left col -->

            <section class="col-lg-7 connectedSortable">

            @include('admin.components.admin-v2.admin-top-left-chart')

            @include('admin.components.admin-v2.admin-chat')

            @include('admin.components.admin-v2.admin-to-do-list')

            @include('admin.components.admin-v2.admin-email-widget')

            </section>

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <section class="col-lg-5 connectedSortable">

            @include('admin.components.admin-v2.admin-map-box')

            @include('admin.components.admin-v2.admin-graph-with-donut')

            @include('admin.components.admin-v2.admin-calender')


            </section>

            <!-- right col -->

        </div>

        <!-- /.row (main row) -->

    </section>

    <!-- /.content -->



