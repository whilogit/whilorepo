<?php

namespace App\Services\Access\Company;

/**
 * Class Access
 * @package App\Services\Access
 */
use  App\Services\Access\Company\MyJobs;
 
use DB;
class CompanyJobs
{
  
   public static function favorite($limit = 10, $offset = 1){
   return  "";
	  
	 return  DB::table('addtofavorite as a')
					 ->where('a.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
					 ->join('jmaster as m', 'm.	seekerId', '=', 'a.seekerId')
					 ->join('userlogin as log', 'log.userId', '=', 'c.userId')
					 ->select('p.companyName')
					  ->get(); 
   }
   
   
    public static function jobs($limit = 10, $offset = 1)
   {
	  
	    $response = array();
	  
	  $response['profile'] = DB::table('commaster as c')
					 ->join('comprofile as p', 'c.companyId', '=', 'p.companyId')
					 ->join('userlogin as log', 'log.userId', '=', 'c.userId')
					 ->select('p.companyName')
					 ->where('c.userId', '=', $_SESSION['WHILLO']['USERID'])
					 ->first();
	
	  $response['logo'] = DB::table('companylogo')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get();
	  $response['jobs'] = MyJobs::get();
	  $totalrows=DB::table('companyjobs as j')
						->join('comprofile as com', 'com.companyId', '=', 'j.companyId')
						->where('com.companyId',$_SESSION['WHILLO']['COMPAnyID'])	
						->count();
						
	$response['count']=ceil($totalrows / $limit);				
	
	return $response;

   }
  
   public static function myaccount($limit = 10, $offset = 1)
   {
	  
	$response=array();	
	$response['myjobs']=CompanyJobs::jobs();
	$response['shortlist']=CompanyJobs::favorite();		
	
	
	//die(json_encode($response));
	return $response;

   }
}