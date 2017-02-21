<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');

    }

    public function adminV2()
    {

        return view('admin.admin-v2');

    }


}
