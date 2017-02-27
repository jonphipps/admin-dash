<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/profile/'. $profile->id) }}">

    <input type="hidden"
           name="_method"
           value="patch">

           {{ csrf_field() }}

    <!-- first_name input -->

    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

        <label class="control-label">First Name</label>

        <input type="text"
               class="form-control"
               name="first_name"
               value="{{ $profile->first_name }}">

        @if ($errors->has('first_name'))

            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end first_name input -->

    <!-- last_name input -->

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

        <label class="control-label">Last Name</label>

        <input type="text"
               class="form-control"
               name="last_name"
               value="{{  $profile->last_name }}">

        @if ($errors->has('last_name'))

            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end last_name input -->

    <!-- birthdate date picker -->

    <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">

        <label class="control-label">Birthdate</label>

        <div>

            {{  Form::date('birthdate', $profile->birthdate) }}

        </div>

        @if ($errors->has('birthdate'))

            <span class="help-block">
                <strong>{{ $errors->first('birthdate') }}</strong>
            </span>

        @endif

    </div>

    <!-- end birthdate date picker -->

    <!-- gender select -->

    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

        <label class="control-label">Gender</label>


        <select class="form-control"
                id="gender"
                name="gender">

            <option value="{{ $profile->gender }}">
                    {{ $profile->showGender($profile->gender) }}
            </option>
            <option value="1">Male</option>
            <option value="0">Female</option>

        </select>

        @if ($errors->has('gender'))

            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>

        @endif

    </div>

    <!-- end gender select -->

    <!-- submit button -->

    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Update

        </button>

    </div>

    <!-- end submit button -->

</form>