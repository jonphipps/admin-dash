<table class="table table-striped">

    <thead>
    <tr>

        <th>Id</th>
        <th>Name</th>
        <th>Date Created</th>

        @if(Auth::user()->adminOrCurrentUserOwns($widget))

        <th>Edit</th>
        <th>Delete</th>

        @endif

    </tr>
    </thead>

    <tbody>
    <tr>

        <!-- id -->

        <td>{{ $widget->id }}</td>

        <!-- end id -->

        <!-- name -->

        <td>
            <a href="/widget/{{ $widget->id }}/edit">

               {{ $widget->name }}

            </a>
        </td>

        <!-- end name -->

        <!-- date created -->

        <td>{{ $widget->created_at }}</td>

        <!-- end date created -->

        @if(Auth::user()->adminOrCurrentUserOwns($widget))

        <!-- edit button -->

        <td>
             <a href="/widget/{{ $widget->id }}/edit">

                 <button type="button"
                         class="btn btn-default">

                     Edit

                 </button>

             </a>
        </td>

        <!-- end edit button -->

        <!-- begin delete form -->

        <td>

            <div class="form-group">

                <form class="form"
                      role="form"
                      method="POST"
                      action="{{ url('/widget/'. $widget->id) }}">

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

        <!-- end delete form -->

        @endif

    </tr>
    </tbody>

</table>