<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

use DB;
use Hash;
/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait UploadeCertifcates
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
	
	
	
	public function removecertificates($id,Request $request,Response $response)
    {
     	
		 $get = DB::table('jdocumenttitles as j')
							->leftjoin('jdocument as t', 't.docId', '=', 'j.docId')
							->select('t.*','j.doctitleId')
							->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
							->where('j.doctitleId', $id)
							->first();
		if($get){
			if(file_exists(app_path() . "/Storage/Documents/". $get->docCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->docName . "." . $get->docExt)){
				   unlink(app_path() . "/Storage/Documents/". $get->docCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->docName . "." . $get->docExt);
				   
		   DB::table('jdocumenttitles')->where('seekerId', '=', $_SESSION['WHILLO']['SEEKERID'])->where('docId', '=', $get->docId)->delete();
		   DB::table('jdocument')->where('docId', '=', $get->docId)->delete();
		  
		   return response()->json(array(
					'success' => true,
					'errors' => "Document successfully deleted"
					
					));
		 }
		}
		return response()->json(array(
					'success' => false,
					'errors' => "No document found"
					));
	}
	
	
    public function updloadcertificates(Request $request,Response $response)
    {
       $rules = array('rowtype'=>'required','type' => 'required', 'title' => 'required','document_file'=>'required');
	   $validator = Validator::make($request->all(), $rules); 
	
	   if ($validator->fails()) {	
			return response()->json(array(
					'success' => false,
					'errors' => $validator->getMessageBag()->toArray()
					));
	   }
	   $proceed = true;
	   $imagearr = array();
	   
	   if($request->input('rowtype')=="new")
	   	$doumentcount = DB::table('jdocumenttitles')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->where('documentId',$request->input('type'))->count(); 
	   else {
		   $get = DB::table('jdocumenttitles as j')
							->leftjoin('jdocument as t', 't.docId', '=', 'j.docId')
							->select('t.*','j.doctitleId')
							->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
							->where('j.doctitleId', $request->input('rowtype'))
							->first();
			if(file_exists(app_path() . "/Storage/Documents/". $get->docCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->docName . "." . $get->docExt)){
				   unlink(app_path() . "/Storage/Documents/". $get->docCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->docName . "." . $get->docExt);
				   }
							
		}
	   
	   if($request->input('rowtype')=='new')if($doumentcount >= 10)$proceed = false;
		if($proceed){
			$images = array();
			$files = $_FILES['document_file']; 
			$images['image'] = array();
			
			for($i = 0 ; $i < count($files['name']) ; $i++) {  
				$imagefile_name    = $files['name'][$i];
				$imagefile_temp    = $files['tmp_name'][$i];
				$imagefile_temp1 = $imagefile_temp;
				
				$im = strrpos($files['name'][$i],"."); 
				if (!$im) {			
					return false;
				}        
				$l = strlen($files['name'][$i]) - $i;
				$ext = substr($files['name'][$i],$im+1,$l);
				$ext = strtolower($ext);
				
				$imageExt= strtolower($ext);
				
				$result= false;	
				
				$dir_year = date("Y");
				$dir_month = date("m");
				$time=time();
				$uniqid = uniqid();
				$image_category = "userdocuemnts";
				$init = true;
				
				$size=filesize($imagefile_temp);  
				if ($size < (9000*1024)) {
					 
					 if (!is_dir(app_path() . "/Storage/Documents/" . $image_category)) {
						 mkdir(app_path() . "/Storage/Documents/". $image_category);         
					} 
					 
					if (!is_dir(app_path() . "/Storage/Documents/". $image_category."/" . $dir_year)) {
						 mkdir(app_path() . "/Storage/Documents/" . $image_category . "/" . $dir_year);         
					}
					if (!is_dir(app_path() . "/Storage/Documents/". $image_category."/" . $dir_year . "/" . $dir_month)) {
						 mkdir(app_path() . "/Storage/Documents/". $image_category."/" . $dir_year . "/" . $dir_month);         
					}
				$imagename_temp= app_path() . "/Storage/Documents/". $image_category."/" . $dir_year . "/" . $dir_month . "/".$dir_year . "_" . $dir_month . "_" . $time . "_" . $uniqid;	
				$imagename_temp_original= app_path() . "/Storage/Documents/". $image_category."/" . $dir_year . "/" . $dir_month . "/".$dir_year . "_" . $dir_month . "_" . $time . "_" . $uniqid . "_org." . $ext;	
				$imagename = $imagename_temp . $ext;	
				$document_file= $imagename_temp . ".".$ext;
				
				if (move_uploaded_file($imagefile_temp, $document_file)) {
					
					if($request->input('rowtype')=='new'){
						DB::insert('insert into jdocument(docCategory,dirYear,dirMonth,docName,crTime,docExt,currentStatus,actualName) 
							values (?,?,?,?,?,?,?,?)',array($image_category,$dir_year,$dir_month,$uniqid,$time,$ext,1,$files['name'][$i]));
							$documentid=DB::getPdo()->lastInsertId();
							
						 DB::insert('insert into jdocumenttitles(documentId,docId,docTitle,seekerId) 
							values (?,?,?,?)',array($request->input('type'),$documentid,$request->input('title'),$_SESSION['WHILLO']['SEEKERID']));
							$currentimage['documentname']= $files['name'][$i];	
							$currentimage['documentid']=DB::getPdo()->lastInsertId();
							array_push($imagearr,$currentimage);
					}else {
						
						DB::update('update jdocument 
								    SET docCategory=?,dirYear=?,dirMonth=?,docName=?,crTime=?,docExt=?,actualName=?
									WHERE docId=?',array($image_category,$dir_year,$dir_month,$uniqid,$time,$ext,$files['name'][$i],$get->docId));
						DB::update('update jdocumenttitles 
						 			 SET docTitle=? 
							         WHERE docId=?',array($request->input('title'),$get->doctitleId));
							$currentimage['documentname']= $files['name'][$i];	
							$currentimage['documentid']=$get->doctitleId;
							array_push($imagearr,$currentimage);
					}
						
					} 
				}
			}
	  }  
	  if($proceed){
	   return response()->json(array(
					'success' => true,
					'errors' => "Document successfully updated",
					'docuemntpath'=>$imagearr
					));
	  }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Only 10 document you can uploade",
				));
	  }
	 }
	 public function completeuploads(Request $request,Response $response)
	 {
		$data= $request->all();
		$check = DB::table('jsocialmedia')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->count(); 
		if($check){
			DB::update('update jsocialmedia 
						 			 SET facebookLink=?,twitterLink=?,twitterLink=?
							         WHERE seekerId=?',array($data['facebook'],$data['twitter'],$data['linkedin'],$_SESSION['WHILLO']['SEEKERID']));
		}else {
			DB::insert('insert into jsocialmedia(seekerId,facebookLink,twitterLink,linkedInLink) 
							values (?,?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$data['facebook'],$data['twitter'],$data['linkedin']));
		}
		 DB::table('jsteps')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->increment('steps');
		
		 return response()->json(array(
					'success' => true,
					'errors' => "Proffession details successfully updated",
				));
	 }
}