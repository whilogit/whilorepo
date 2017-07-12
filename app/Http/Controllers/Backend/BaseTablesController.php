<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;

use DB;


class BaseTablesController extends Controller
{
   

	public function home()
                { 
                    return view('backend.basetables.bastablehome'); 
                }
                public function locationindex() 
                 {
                    return view('backend.basetables.location')->with(array("data"=>Companylist::getlocation()));  
                    
                  }
}