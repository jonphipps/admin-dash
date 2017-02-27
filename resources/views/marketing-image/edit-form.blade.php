<form class="form"
      role="form"
      method="POST"
      action="/marketing-image/{{ $marketingImage->id }}"
      enctype="multipart/form-data">

      <input type="hidden"
             name="_method"
             value="patch">

      {{ csrf_field() }}

    <!-- is_active select -->

    <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">

        <label class="control-label">Is Active</label>

        <select class="form-control"
                id="is_active"
                name="is_active">

            <option value="{{$marketingImage->is_active}}">
                           {{ $marketingImage->is_active == 1 ? 'Yes' :'No' }}
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>

        </select>


        @if ($errors->has('is_active'))

            <span class="help-block">
                <strong>{{ $errors->first('is_active') }}</strong>
            </span>

        @endif

    </div>

    <!-- end is_active select -->

    <!-- is_featured select -->

    <div class="form-group{{ $errors->has('is_featured') ? ' has-error' : '' }}">

        <label class="control-label">Is Featured</label>


        <select class="form-control"
                id="is_featured"
                name="is_featured">

            <option value="{{$marketingImage->is_featured}}">
                           {{ $marketingImage->is_featured == 1 ? 'Yes' :'No' }}
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>

        </select>


        @if ($errors->has('is_featured'))

            <span class="help-block">
                <strong>{{ $errors->first('is_featured') }}</strong>
            </span>

        @endif

    </div>

    <!-- end is_featured select -->

    <!-- image_weight input -->

    <div class="form-group{{ $errors->has('image_weight') ? ' has-error' : '' }}">

        <label class="control-label">Image Weight</label>

        <input type="number"
               class="form-control"
               name="image_weight"
               value="{{ old('image_weight') ? old('image_weight') : $marketingImage->image_weight }}">

        @if ($errors->has('image_weight'))

            <span class="help-block">
                <strong>{{ $errors->first('image_weight') }}</strong>
            </span>

        @endif

    </div>

    <!-- end image_weight input -->

    <!-- image file input -->

    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

            <label class="control-label">Primary Image</label>

            <input type="file"
                   name="image"
                   id="image">

        @if ($errors->has('image'))

            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>

    @endif

    </div>

    <!-- end image file input -->

    <!-- submit button -->

        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Update

            </button>

        </div>

    <!-- end submit button -->

</form>