<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Frontend
 */
class DashboardController extends Controller
{

    public function index()
    {
       //echo $_SESSION['WHILLO']['SEEKERID'];exit;
        return view('frontend.myaccount.' . $GLOBALS['redirect'])->with("data" , access()->$GLOBALS['redirect']());
        //return view('frontend.myaccount.' . $GLOBALS['redirect']);
    }
}
