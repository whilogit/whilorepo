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
trait CompanyImages
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
	public function removeimages(Request $request,Response $response)
    {
     	
		 $companyimages = DB::table('companyimages as i')->select('i.*')
	   								->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])
									->where('imageId', $request->input('imageId'))
									->get();
	   if($companyimages){
		   foreach ($companyimages as $get){			   
			   if(file_exists(app_path() . "/Storage/Images/". $get->imageCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->logoName . "_l." . $get->logExt)){
				   unlink(app_path() . "/Storage/Images/". $get->imageCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->logoName . "_l." . $get->logExt);
			   }
				   
				if(file_exists(app_path() . "/Storage/Images/". $get->imageCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->logoName . "_s." . $get->logExt)){
				   unlink(app_path() . "/Storage/Images/". $get->imageCategory."/" . $get->dirYear . "/" . $get->dirMonth . "/".$get->dirYear . "_" . $get->dirMonth . "_" .$get->crTime . "_" . $get->logoName . "_s." . $get->logExt);
				   }
			   
		   }
	      DB::table('companyimages')->where('companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])->where('imageId', '=', $request->input('imageId'))->delete();
		  
		  return response()->json(array(
					'success' => true,
					'errors' => "Image successfully deleted"
					
					));
		    
	   }
	   return response()->json(array(
					'success' => false,
					'errors' => "No image found"
					));
	}
	
	
    public function imageupload(Request $request,Response $response)
    {
       
	   $proceed = true;
	   $imagearr = array();
	   $imagecount = DB::table('companyimages')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->count(); //die(json_encode($imagecount));
		if($imagecount >= 10)$proceed = false;
		if($proceed){
			$images = array();
			$files = $_FILES['image_file']; 
			$images['image'] = array();
			$cnt = (10 - $imagecount) > count($files['name']) ? count($files['name']) : 10-$imagecount; //die(json_encode($cnt));
			for($i = 0 ; $i < $cnt ; $i++) {  
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
				$image_category = "companyimages";
				$init = true;
				
				$size=filesize($imagefile_temp);  
				if ($size < (9000*1024)) {
					 
					 if (!is_dir(app_path() . "/Storage/Images/" . $image_category)) {
						 mkdir(app_path() . "/Storage/Images/". $image_category);         
					} 
					 
					if (!is_dir(app_path() . "/Storage/Images/". $image_category."/" . $dir_year)) {
						 mkdir(app_path() . "/Storage/Images/" . $image_category . "/" . $dir_year);         
					}
					if (!is_dir(app_path() . "/Storage/Images/". $image_category."/" . $dir_year . "/" . $dir_month)) {
						 mkdir(app_path() . "/Storage/Images/". $image_category."/" . $dir_year . "/" . $dir_month);         
					}
				$imagename_temp= app_path() . "/Storage/Images/". $image_category."/" . $dir_year . "/" . $dir_month . "/".$dir_year . "_" . $dir_month . "_" . $time . "_" . $uniqid;	
				$imagename_temp_original= app_path() . "/Storage/Images/". $image_category."/" . $dir_year . "/" . $dir_month . "/".$dir_year . "_" . $dir_month . "_" . $time . "_" . $uniqid . "_org." . $ext;	
				$imagename = $imagename_temp . $ext;	
				$large_image= $imagename_temp . "_l.".$ext;
				$small_image= $imagename_temp . "_s.".$ext;
				
			
				list($owidth,$oheight) = getimagesize($imagefile_temp);
				$width = $owidth;
				$height = $oheight; 
							  
				$height=$width =""; # image with & height
				$size = getimagesize($imagefile_temp);
				$ratio = $size[0]/$size[1]; // width/height
				if( $ratio > 1) {
					$width = 200;
					$height = 200/$ratio;
				}
				else {
					$width = 200*$ratio;
					$height = 200;
				}
				
				$src = imagecreatefromstring(file_get_contents($imagefile_temp));
				$dst = imagecreatetruecolor($width,$height);
				imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
				imagedestroy($src);
				imagepng($dst,$large_image); // adjust format as needed
				
				
				$height=$width =""; # image with & height
				$size = getimagesize($imagefile_temp);
				$ratio = $size[0]/$size[1]; // width/height
				if( $ratio > 1) {
					$width = 100;
					$height = 100/$ratio;
				}
				else {
					$width = 100*$ratio;
					$height = 100;
				}
				
				$src = imagecreatefromstring(file_get_contents($imagefile_temp));
				$dst = imagecreatetruecolor($width,$height);
				imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
				imagedestroy($src);
				imagepng($dst,$small_image); // adjust format as needed
				
				
				DB::insert('insert into companyimages(companyId,imageCategory,logoName,dirYear,dirMonth,crTime,logExt,currentStatus) 
						values (?,?,?,?,?,?,?,?)',array($_SESSION['WHILLO']['COMPAnyID'],$image_category,$uniqid,$dir_year,$dir_month,$time,$ext,1));
				$currentimage['image']= "/display/image/$image_category/$dir_year/$dir_month/$uniqid/$time/s.$ext";	
				$currentimage['imageid']=DB::getPdo()->lastInsertId();
				array_push($imagearr,$currentimage);
				}
			}
	  
	  	
	 
		 }  
	   
	  if($proceed){
	   return response()->json(array(
					'success' => true,
					'errors' => "Image successfully updated",
					'imagepath'=>$imagearr
					));
	  }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Only 10 images you can uploade",
				));
	  }
	 }
	
}