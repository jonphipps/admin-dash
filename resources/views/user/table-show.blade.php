<div class="table-responsive no-padding">

    <table class="table table-striped">

        <thead>
        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>Profile</th>
            <th>Email</th>
            <th>Subscribed</th>
            <th>Admin</th>
            <th>Status</th>
            <th>Joined</th>
            @if(Auth::user()->adminOrCurrentUserOwns($user))

                <th>Edit</th>

                <th>Delete</th>

            @endif

        </tr>

        </thead>

        <tbody>
        <tr>

            <!-- user id -->

            <td>{{ $user->id }} </td>

            <!-- end user id -->

            <!-- user name -->

            <td><a href="/user/{{ $user->id }}/edit">
                    {{ $user->name }}</a></td>

            <!-- end user name -->

            <!-- profile name -->

            @if (isset($profile->id))

                <td><a href="/profile/{{ $profile->id }}">
                        {{$user->profile->fullName()}}</a></td>
            @else

                <td>none</td>

            @endif

            <!-- end profile name -->

            <!-- email -->

            <td>{{ $user->email }}</td>

            <!-- end email -->

            <!-- newsletter status -->

            <td>{{ $user->showNewsletterStatusOf($user) }}</td>

            <!-- end newsletter status-->

            <!-- admin status -->

            @if( $user->showAdminStatusOf($user) == 'Yes')

                <td><span class="label label-success">Yes</span></td>

            @else

                <td><span class="label label-warning">No</span></td>

            @endif

            <!-- end admin status -->

            <!-- user status -->

            @if( $user->showStatusOf($user) == 'Active')

                <td><span class="label label-primary">Active</span></td>

            @else

                <td><span class="label label-warning">Inactive</span></td>

            @endif

            <!-- end user status -->

            <!-- joined date -->

            <td>{{ $user->created_at->format('m-d-Y') }}</td>

            <!-- end joined date -->



            @if(Auth::user()->adminOrCurrentUserOwns($user))

                <!-- edit button -->

                <td><a href="/user/{{ $user->id }}/edit">

                        <button type="button"
                                class="btn btn-default">Edit</button>
                    </a></td>

                <!-- end edit button -->

                <!-- delete button -->

                <td>

                    <form class="form"
                          role="form"
                          method="POST"
                          action="{{ url('/user/'. $user->id) }}">

                          <input type="hidden"
                                 name="_method"
                                 value="delete">

                                 {{ csrf_field() }}

                          <input class="btn btn-danger"
                                 Onclick="return ConfirmDelete();"
                                 type="submit"
                                 value="Delete">

                    </form>

                </td>

                <!-- end delete button -->

            @endif

        </tr>
        </tbody>

    </table>

</div>