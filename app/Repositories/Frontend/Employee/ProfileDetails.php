<?php
namespace App\Repositories\Frontend\Employee;
use App\Http\Controllers\Controller;
use DB;

class ProfileDetails extends Controller
{
	public static function profile()
	{
		return DB::table('jmaster as m')
					->where('m.seekerId',$_SESSION['WHILLO']['SEEKERID'])
					->join('jprofileimage as img', 'img.seekerId', '=', 'm.seekerId')
					->join('userlogin as ul', 'ul.userId', '=', 'm.userId')
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->join('_locations as l', 'l.locationId', '=', 'p.locationId')
					->select('img.imageCategory','img.imageName','img.dirYear','img.dirMonth','img.crTime','img.imgExt','p.mobileNumber','p.firstName','p.lastName','p.city','p.pinCode','p.address','p.Gender','p.shortBio','ul.userName','ul.emailAddress')
					->get();
	}
	public static function education()
	{
		return DB::table('jqualification as jq')
		      ->where('jq.seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->join('_qualification as q','q.qualificationId','=','jq.qualificationId')
			  ->join('jkeyskill as k','k.seekerId','=','jq.seekerId')
			  ->select('jq.passingYear','jq.courceName','jq.specilizationName','jq.universityName','jq.courcetypeId','q.qualificationName','k.keyskills')
			  ->get();
				
	}
	public static function personal()
	{
		return DB::table('jpersonal as p')
		      ->where('p.seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->select('p.dob','p.marital','p.relocate','p.shifts','p.vehicle','p.adharcard','p.pancard','p.passport')
			  ->get();
				
	}
	public static function professional()
	{
			
		return DB::table('jproffessional as p')
		      ->where('p.seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->join('_industry as i','i.industryId','=','p.industryId')
			  ->join('_functionalarea as e','e.functionalId','=','p.functionalarea')
			  ->select('p.currentstatus','p.exprstatus','i.industryName','e.functionalName')
			  ->get();
				
	}
	public static function emails()
	{
		return DB::table('jfeedbackemails as e')
		      ->where('e.seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->join('jfeedbacklink as l','l.feedbackId','=','e.feedbackId')
			  ->select('l.feedbackDetails','e.EmailId')
			  ->get();
				
	}
	public static function documents()
	{
		return DB::table('jdocumenttitles as d')
		      ->where('d.seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->join('jdocument as dd','dd.docId','=','d.docId')
			  ->join('_documents as s','s.docuementId','=','d.documentId')
			  ->select('dd.*','d.docTitle','d.documentId','s.documentName')
			  ->get();
				
	}
	public static function expirience()
	{
		return DB::table('jexperience')
		      ->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
			  ->select('companyName','description','startYear','endYear')
			  ->get();
				
	}
	
	
    
}