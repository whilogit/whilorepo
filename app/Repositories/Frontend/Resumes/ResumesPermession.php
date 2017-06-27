<?php

namespace App\Repositories\Frontend\Resumes;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class ResumesPermession extends Controller
{
	public static function insert($id)
	{
		
		$createdDate = date("d-m-Y h:i:s");
		$res = DB::insert('insert into jdocpermision(seekerId,companyId,status,createdDate) 
	   				values (?,?,?,?)',array($id,$_SESSION['WHILLO']['COMPAnyID'],1,$createdDate));
					
		$permissionid =  DB::getPdo()->lastInsertId();
		$res = DB::insert('insert into companypayments(companyId,permissionId,amount,status) 
	   				values (?,?,?,?)',array($_SESSION['WHILLO']['COMPAnyID'],$permissionid,4,0));			
		
		return response()->json(array(
					'success' => true,
					'errors' => "You got the full permission"
					));
		
		
	}
	
	public static function addfavorite($id)
	{
		
		$createdDate = date("d-m-Y h:i:s");
		$res = DB::insert('insert into addtofavorite(companyId,seekerId,createdDate) 
	   				values (?,?,?)',array($_SESSION['WHILLO']['COMPAnyID'],$id,$createdDate));
					
		
		return response()->json(array(
					'success' => true,
					'errors' => "Successfully added to favorite"
					));
	}
	public static function removefavorite($id)
	{
		
		
		$res = DB::delete('delete from addtofavorite
							where companyId=? and seekerId=?
	   				',array($_SESSION['WHILLO']['COMPAnyID'],$id));
					
		
		return response()->json(array(
					'success' => true,
					'errors' => "Successfully removed from favorite"
					));
	}
	
	public static function downloade($id)
	{
		 $url= DB::table('jdocumenttitles as d')
								->where('d.seekerId', $id)
								->where('d.documentId', 3)
								->join('jdocument as dd','dd.docId','=','d.docId')
								  ->join('_documents as s','s.docuementId','=','d.documentId')
								  ->select('dd.*','d.docTitle','d.documentId','s.documentName')
								  ->get();
		 						   
		
		header("Content-Length: " . filesize($filename));
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=something.doc');
		
		readfile($url);
	}
	
	
	
	
    
}