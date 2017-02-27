<form role="form"
      method="POST"
      action="{{ url('/password/email') }}">

      {{ csrf_field() }}

    <!-- email input -->

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <div class="form-group has-feedback">

            <input id="email"
                   type="email"
                   class="form-control"
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="enter your email..."
                   required autofocus>

            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            @if ($errors->has('email'))

                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>

            @endif

        </div>

    </div>

    <!-- end email input -->

    <!-- submit button -->

    <div class="submit-email-button">

        <button type="submit"
                class="btn btn-primary">

            Send Password Reset Link

        </button>

    </div>

    <!-- end submit button -->

</form>