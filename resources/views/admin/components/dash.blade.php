    <!-- Main content -->

    <section class="content">

    @include('admin.components.large-stat-boxes')

        <!-- Main row -->

        <div class="row">

            <!-- Left col -->

            <section class="col-lg-7 connectedSortable">

            @include('admin.components.top-left-chart')

            @include('admin.components.chat')

            @include('admin.components.to-do-list')

            @include('admin.components.email-widget')

            </section>

            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <section class="col-lg-5 connectedSortable">

            @include('admin.components.map-box')

            @include('admin.components.graph-with-donut')

            @include('admin.components.calender')


            </section>

            <!-- right col -->

        </div>

        <!-- /.row (main row) -->

    </section>

    <!-- /.content -->

