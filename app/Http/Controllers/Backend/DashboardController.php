<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;
use App\Repositories\Backend\Talents\Talentlist;

use App\Repositories\Backend\Company\Approve;
use DB;

class DashboardController extends Controller
{
   
	public function index()
                { 
                    return view('backend.auth.login');  
                    
                }
	public function home()
                { 
                    
                    return view('backend.index')->with(array("data"=>Companylist::totalAmount()));
                }
	public function companylist()
                {  
                    return view('backend.companylist')->with(array("data"=>Companylist::getlist()));  
                    
                }
	public function talentlist()
                {  
                    return view('backend.talentlist')->with(array("data"=>Talentlist::getlist()));
                }
                 public static function shortlistcandidate()
        {
             return view('backend.shortlist')->with(array("data"=>Talentlist::shortlistcandidate()));
        }
                 public static function hiredcandidate()
        {
             return view('backend.hired')->with(array("data"=>Talentlist::hiredcandidate()));
        }
        
	public function approve($id)
                {  
                    return Approve::accept($id); 
                }
      
	
}