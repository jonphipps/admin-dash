<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/widget') }}">

      {{ csrf_field() }}

    <!-- widget name Form Input -->

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <label class="control-label">Widget Name</label>

        <input type="text"
               class="form-control"
               name="name"
               value="{{ old('name') }}">

        @if ($errors->has('name'))

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>

        @endif

    </div>

    <!-- end widget name Form Input -->

    <!-- submit button -->

    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Create

        </button>

    </div>

    <!-- end submit button -->

</form>