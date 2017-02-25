<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\GridQueries\GridQuery;
use App\Queries\GridQueries\WidgetQuery;
use App\Queries\GridQueries\MarketingImageQuery;
use App\Queries\GridQueries\UserQuery;
use App\Queries\GridQueries\ProfileQuery;


class ApiController extends Controller
{

    public function widgetData(Request $request)
    {

        return GridQuery::sendData($request, new WidgetQuery);

    }

    public function marketingImageData(Request $request)
    {

        return GridQuery::sendData($request, new MarketingImageQuery);
    }

    public function profileData(Request $request)
    {

        return GridQuery::sendData($request, new ProfileQuery);

    }

    public function userData(Request $request)
    {

        return GridQuery::sendData($request, new UserQuery);

    }


}
