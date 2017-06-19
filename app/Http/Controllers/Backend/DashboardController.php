<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;
use App\Repositories\Backend\Talents\Talentlist;

use App\Repositories\Backend\Company\Approve;


class DashboardController extends Controller
{
   
	public function index(){ return view('backend.auth.login');  }
	public function home(){ return view('backend.index');  }
	public function companylist(){  return view('backend.companylist')->with(array("data"=>Companylist::getlist()));  }
	public function talentlist(){  return view('backend.talentlist')->with(array("data"=>Talentlist::getlist())); }
	public function approve($id){  return Approve::accept($id);  }
	
}