<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleExamplesController extends Controller
{
    public function example404()
    {

        return view('style-examples.404-example');

    }

    public function example500()
    {

        return view('style-examples.500-example');

    }

    public function blankPage()
    {

        return view('style-examples.blank-page');

    }

    public function buttons()
    {

        return view('style-examples.buttons');

    }

    public function calendar()
    {

        return view('style-examples.calendar');

    }

    public function documentation()
    {

        return view('style-examples.documentation');

    }

    public function editors()
    {

        return view('style-examples.editors');

    }

    public function formsAdvanced()
    {

        return view('style-examples.forms-advanced');

    }

    public function formExamples()
    {

        return view('style-examples.form-example');

    }

    public function icons()
    {

        return view('style-examples.icons');

    }

    public function invoice()
    {

        return view('style-examples.invoice');

    }

    public function lockscreen()
    {

        return view('style-examples.lockscreen');

    }

    public function loginExample()
    {

        return view('style-examples.login-example');

    }

    public function mailbox()
    {

        return view('style-examples.mailbox');

    }

    public function pacePage()
    {

        return view('style-examples.pace-page');

    }


    public function profileExample()
    {

        return view('style-examples.profile-example');

    }

    public function registerExample()
    {

        return view('style-examples.register-example');

    }

    public function sliders()
    {

        $excludeJqueryUi = true;

        return view('style-examples.sliders', compact('excludeJqueryUi'));

    }

    public function tablesData()
    {

        return view('style-examples.tables-data');

    }

    public function tablesSimple()
    {

        return view('style-examples.tables-simple');

    }

    public function timeline()
    {

        return view('style-examples.timeline');

    }

    public function uiGeneral()
    {

        return view('style-examples.ui-general');

    }

    public function widgets()
    {

        return view('style-examples.widgets');

    }


}
