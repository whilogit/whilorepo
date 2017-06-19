<?php
namespace App\Services\Access\Employee;
use App\Repositories\Frontend\Employee\ProfileDetails;



class EmployeeAccount
{
   public static function details()
   {
	  
	  $response = array();
	  $response['profile']=ProfileDetails::profile();
	  $response['education']=ProfileDetails::education();
	  $response['personal']=ProfileDetails::personal();
	  $response['professional']=ProfileDetails::professional();
	  $response['emails']=ProfileDetails::emails();
	  $response['documents']=ProfileDetails::documents();
	  $response['expirience']=ProfileDetails::expirience();
	  
	 // die(json_encode($response));
	  
	  return $response;
   }
}