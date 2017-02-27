<form method="POST"
      action="{{ url('/register') }}">

      {{ csrf_field() }}

    <!-- name input -->

    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">

        <input id="name"
               name="name"
               type="text"
               class="form-control"
               value="{{ old('name') }}"
               placeholder="Full Name"
               required autofocus>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        @if ($errors->has('name'))

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end name input -->

    <!-- email input -->

    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email"
               type="email"
               name="email"
               class="form-control"
               value="{{ old('email') }}"
               placeholder="email"
               required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>


        @if ($errors->has('email'))

            <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
            </span>

        @endif

    </div>

    <!-- end email input -->

    <!-- password input -->

    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">

        <input id="password"
               type="password"
               name="password"
               class="form-control"
               placeholder="Password"
               required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        @if ($errors->has('password'))

            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>

        @endif

    </div>

    <!-- end password input -->

    <!-- password confirmation -->

    <div class="form-group has-feedback">

        <input id="password-confirm"
               name="password_confirmation"
               type="password"
               class="form-control"
               placeholder="Retype password"
               required>

        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

    </div>

    <!-- end password confirmation -->

    <!-- row needed for separation of social links -->

    <div class="row">

        <!-- terms checkbox -->

        <div class="col-xs-8">

            <div class="checkbox">

                <label class="{{ $errors->has('terms') ? ' has-error' : '' }}">

                    <input type="checkbox" name="terms" required>

                           I agree to the <a href="/terms">terms</a>

                </label>

                @if ($errors->has('terms'))

                    <span class="help-block">
                        <strong>{{ $errors->first('terms') }}</strong>
                    </span>

                @endif

            </div>

        </div>

        <!-- end terms checkbox -->

        <!-- is_subscribed checkbox -->

        <div class="col-xs-8">

            <div class="checkbox">

                <label>

                    <input type="checkbox"
                           name="is_subscribed">

                    Subscribe to Newsletter?

                </label>

            </div>

        </div>

        <!-- end is_subscribed checkbox -->

        <!-- submit button -->
        <div class="col-xs-4">

            <button type="submit"
                    class="btn btn-primary btn-block btn-flat">

                Register

            </button>

        </div>

        <!-- end submit button -->

    </div>

</form>