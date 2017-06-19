<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);

        return view('frontend.index')->with("locations",DB::table('_locations')->get() );
    }

   
    public function payroll(){ return view('frontend.static.payroll');   }
    public function trainhire(){ return view('frontend.static.trainhire');   }
    public function campusdrives(){ return view('frontend.static.campus-drives');   }
    public function pricing(){ return view('frontend.static.pricing');   }
    public function employeeverification(){ return view('frontend.static.Employee-Verification');   }
   
    public function databasemanagement(){ return view('frontend.static.Database-Management');   }
    public function aboutus(){ return view('frontend.static.about');   }
public function languagetraining(){ return view('frontend.static.Language-Training');   }
public function corporateleadership(){ return view('frontend.static.Corporate-Leadership-Program');   }

   

 	
    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}


