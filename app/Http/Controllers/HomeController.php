<?php

namespace App\Http\Controllers;

use App\Exceptions\AlreadySyncedException;
use App\Exceptions\ConnectionNotAcceptedException;
use App\Exceptions\CredentialsDoNotMatchException;
use App\Exceptions\EmailAlreadyInSystemException;
use App\Exceptions\EmailNotProvidedException;
use App\Exceptions\NoActiveAccountException;
use App\Exceptions\TransactionFailedException;
use App\Exceptions\UnauthorizedException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.home');

    }

}
