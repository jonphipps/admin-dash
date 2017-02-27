<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/settings') }}">

      {{ csrf_field() }}

    <!-- user name input -->

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

    <!-- end user name input -->

    <!-- email input -->

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <label for="email" class="control-label">E-Mail Address</label>

            <input id="email"
                   type="email"
                   class="form-control"
                   name="email"
                   value="{{ $user->email }}">

            @if ($errors->has('email'))

                <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                </span>

            @endif

    </div>

    <!-- end email input -->

    <!-- is_subscribed select -->

    <div class="form-group{{ $errors->has('is_subscribed') ? ' has-error' : '' }}">

        <label class="control-label">Is Subscribed?</label>

            <select class="form-control"
                    id="is_subscribed"
                    name="is_subscribed">

                <option value="{{ $user->is_subscribed }}">
                               {{ $user->is_subscribed == 1 ? 'Yes' : 'No' }}</option>
                <option value="1">Yes</option>
                <option value="0">No</option>

        </select>


        @if ($errors->has('is_subscribed'))

            <span class="help-block">
                  <strong>{{ $errors->first('is_subscribed') }}</strong>
            </span>

        @endif

    </div>

    <!-- end is_subscribed select -->

    <!-- submit button -->

    <div class="form-group">

        <button type="submit" class="btn btn-primary btn-lg">

            Update

        </button>

    </div>

    <!-- end submit button -->

    <!-- reset password button -->

    <div class="form-group">

        <a href="{{ url('/password/reset') }}">

            <button type="button" class="btn btn-lg btn-warning">

                Reset Password

            </button>

        </a>

    </div>

    <!-- end reset password button -->

</form>