<table class="table table-striped">

    <thead>
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
    </thead>

    <tbody>
    <tr>

        <!-- id -->

        <td>{{ $profile->id }}</td>

        <!-- end id -->

        <!-- name -->

        <td>

            <a href="/profile/{{ $profile->id }}/edit">

                {{ $profile->fullName() }}

            </a>

        </td>

        <!-- end name -->

        <!-- gender -->

        <td>{{ $profile->showGender($profile->gender) }}</td>

        <!-- end gender -->

        <!-- birthdate -->

        <td>{{ $profile->birthdate->format('m-d-Y') }}</td>

        <!-- end birthdate -->

        @if(Auth::user()->adminOrCurrentUserOwns($profile))

            <!--  edit button -->

            <td>

                <a href="/profile/{{ $profile->id }}/edit">

                    <button type="button"
                            class="btn btn-default">Edit
                    </button>

                </a>

            </td>

            <!--  end edit button -->

            <!--  delete button -->

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

            <!-- end delete button -->

        @endif

    </tr>
    </tbody>

</table>