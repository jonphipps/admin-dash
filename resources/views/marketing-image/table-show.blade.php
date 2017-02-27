
<table class="table table-striped">

    <tr>

        <th>Thumbnail</th>

    </tr>

    <tr>

        <!-- thumbnail -->

        <td>

            <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

        </td>

        <!-- thumbnail -->

    </tr>

    <tr>

        <th>Active?</th>

    </tr>

    <tr>

        <!-- active -->

        <td>{{ $marketingImage->showActiveStatus($marketingImage->is_active) }}</td>

        <!-- end active -->

    </tr>

    <tr>

        <th>Featured?</th>

    </tr>

    <tr>

        <!-- featured -->

        <td>{{ $marketingImage->showFeaturedStatus($marketingImage->is_featured) }}</td>

        <!-- end featured -->

    </tr>

    <tr>

        <th>Image Weight</th>

    </tr>

    <tr>

        <!-- image weight -->

        <td>{{ $marketingImage->image_weight }}</td>

        <!-- end image weight -->

    </tr>

    <tr>

        <th>Primary Image</th>

    </tr>

    <tr>

        <td>

            <!-- primary image -->

            <img src="{{ $marketingImage->showImage($marketingImage, $imagePath) }}" style="max-width: 600px;">

            <!-- end primary image -->

        </td>
    </tr>

    <tr>

        <!-- edit & delete buttons in final row -->

        <td>

            <!-- pull-left -->

            <div class="pull-left">

                <!-- edit button -->

                <div class="margin-top-10">

                    <a href="/marketing-image/{{ $marketingImage->id }}/edit">

                        <button type="button" class="btn btn-primary btn-lg">

                            Edit Image

                        </button>

                    </a>

                </div>

                <!-- end edit button -->

                <!-- delete button -->

                <div class="margin-top-10">

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

                </div>

                <!-- end delete button -->

            </div>

            <!-- end pull-left -->

        </td>

        <!-- end buttons in final row -->

    </tr>

</table>