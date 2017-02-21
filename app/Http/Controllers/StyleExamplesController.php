<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleExamplesController extends Controller
{
    public function example404()
    {

        return view('style-examples.page-examples.404-example');

    }

    public function example500()
    {

        return view('style-examples.page-examples.500-example');

    }

    public function blankPage()
    {

        return view('style-examples.page-examples.blank-page');

    }

    public function boxed()
    {

        return view('style-examples.layout-options.boxed');

    }

    public function buttons()
    {

        return view('style-examples.ui-elements.buttons');

    }

    public function calendar()
    {

        return view('style-examples.widgets.calendar');

    }

    public function chartsJs()
    {

        return view('style-examples.charts.charts-js');

    }

    public function collapsedSidebar()
    {

        return view('style-examples.layout-options.collapsed-sidebar');

    }

    public function documentation()
    {

        return view('style-examples.documentation');

    }

    public function editors()
    {

        return view('style-examples.forms.editors');

    }

    public function fixed()
    {

        return view('style-examples.layout-options.fixed');

    }

    public function flot()
    {

        return view('style-examples.charts.flot');

    }

    public function formsAdvanced()
    {

        return view('style-examples.forms.forms-advanced');

    }

    public function formExamples()
    {

        return view('style-examples.forms.form-example');

    }

    public function icons()
    {

        return view('style-examples.ui-elements.icons');

    }

    public function inlineCharts()
    {

        return view('style-examples.charts.inline-charts');

    }

    public function invoice()
    {

        return view('style-examples.page-examples.invoice');

    }

    public function lockscreen()
    {

        return view('style-examples.page-examples.lockscreen');

    }

    public function loginExample()
    {

        return view('style-examples.page-examples.login-example');

    }

    public function mailbox()
    {

        return view('style-examples.widgets.mailbox');

    }

    public function modals()
    {

        return view('style-examples.ui-elements.modals');

    }

    public function morris()
    {

        return view('style-examples.charts.morris');

    }

    public function pacePage()
    {

        return view('style-examples.page-examples.pace-page');

    }


    public function profileExample()
    {

        return view('style-examples.page-examples.profile-example');

    }

    public function registerExample()
    {

        return view('style-examples.page-examples.register-example');

    }

    public function sliders()
    {

        $excludeJqueryUi = true;

        return view('style-examples.ui-elements.sliders', compact('excludeJqueryUi'));

    }

    public function tablesData()
    {

        return view('style-examples.tables.tables-data');

    }

    public function tablesSimple()
    {

        return view('style-examples.tables.tables-simple');

    }

    public function timeline()
    {

        return view('style-examples.ui-elements.timeline');

    }

    public function topNav()
    {

        return view('style-examples.layout-options.top-nav');

    }

    public function uiGeneral()
    {

        return view('style-examples.ui-elements.ui-general');

    }

    public function widgets()
    {

        return view('style-examples.widgets.widgets');

    }


}
