<form role="form"
      method="POST"
      action="{{ route('password.request') }}">

    {{ csrf_field() }}

    <input type="hidden"
           name="token"
           value="{{ $token }}">

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

    <!-- confirm password input -->

    <div class="form-group has-feedback">

        <input  id="password-confirm"
                name="password_confirmation"
                type="password"
                class="form-control"
                placeholder="Retype password"
                required>

            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

    </div>

    <!-- end confirm password input -->

    <!-- reset password button -->

    <div class="reset-password-button">

        <button type="submit" class="btn btn-primary">Reset Password</button>

    </div>

    <!-- end password reset button -->

</form>