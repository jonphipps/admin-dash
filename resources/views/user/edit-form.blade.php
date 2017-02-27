<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/user/'. $user->id) }}">

    <input type="hidden"
           name="_method"
           value="patch">

           {{ csrf_field() }}

    <!-- name input -->

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <label class="control-label">User Name</label>

        <input type="text"
               class="form-control"
               name="name"
               value="{{ $user->name }}">

        @if ($errors->has('name'))

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end name input -->

    <!-- is_admin select -->

    <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">

        <label class="control-label">Is Admin?</label>


        <select class="form-control"
                id="is_admin"
                name="is_admin">

            <option value="{{ $user->is_admin }}">
                           {{ $user->showAdminStatusOf($user) }}
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>

        </select>

        @if ($errors->has('is_admin'))

            <span class="help-block">
                <strong>{{ $errors->first('is_admin') }}</strong>
            </span>

        @endif

    </div>

    <!-- end is_admin select -->

    <!-- submit button -->

    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Update

        </button>

    </div>

    <!-- end submit button -->

</form>