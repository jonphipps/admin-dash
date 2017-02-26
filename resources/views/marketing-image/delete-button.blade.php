<form class="form"
      role="form"
      method="POST"
      action="{{ url('/marketing-image/'. $marketingImage->id) }}">

    <input type="hidden"
           name="_method"
           value="delete">

    {{ csrf_field() }}

    <button class="btn btn-danger btn-lg"
            Onclick="return ConfirmDelete();"
            type="submit">

        Delete

    </button>

</form>