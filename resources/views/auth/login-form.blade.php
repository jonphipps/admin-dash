<form  method="POST"
       action="{{ url('/login') }}">

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

    <!-- password input -->

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


        <div class="form-group has-feedback">
            <input id="password"
                   type="password"
                   class="form-control"
                   name="password"
                   placeholder="Password"
                   required>

            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))

                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>

            @endif

        </div>

    </div>

    <!-- end password input -->

    <!-- row for remember me and submit -->

    <div class="row">

        <!-- remember me -->

        <div class="col-xs-8">

            <div class="checkbox">

                <label>
                    <input type="checkbox"
                           name="remember" {{ old('remember') ? 'checked' : '' }}>

                    Remember Me

                </label>

            </div>

        </div>

        <!-- end remember me -->

        <!-- submit button -->

        <div class="col-xs-4">

            <button type="submit"
                    class="btn btn-primary btn-block btn-flat">

                Sign In

            </button>

        </div>

        <!-- end submit button -->

    </div>

    <!-- end row for remember me and submit -->

</form>