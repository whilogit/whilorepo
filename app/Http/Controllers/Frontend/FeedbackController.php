<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FeedbackController extends Controller
{
   
     
	 
	public function success(){ 
		 return view('frontend.auth.feedback_success');
	}
    
	public function getfeedback($id){ 
		
		  $link = DB::table('jfeedbacklink')
	   								->where('linkName', $id)									
									->get();
									
									
									//die(json_encode($link));
		 if(sizeof($link) ==1){ 
			  foreach($link as $list){
				  if($list->Status == 1){				  
					   return view('frontend.error.feedback_alreadysubmited');
						 
				  }
				  if($list->Status == 0){				  
					   return view('frontend.auth.feedbacksubmit')->with('userId',$list->VerificationCode);  
				  }
			  }
		  }else {
			 return view('frontend.error.feedback_notfound');  
		  }
		  
		 
	}
	public function submitfeedback(Request $request){ 
		
		$data = $request->all(); 
		$user = DB::table('jfeedbacklink')
	   								->where('VerificationCode', $data['user_details'])									
									->get();
	    if($user){
			$userId = NULL;
			$feedbackId= NULL; //die(json_encode($user));
			foreach($user as $list){ $userId = $list->seekerId; $feedbackId = $list->feedbackId; }
			$createdDate = date("Y-m-d H:i:s");
			//die(json_encode($data['terminated']));
			$res = DB::insert('insert into jfeedbacks(feedbackId,doe,jobtitle,whyEmpLeft,eterminated,issues,rehire,salary,grade,ethical,comments,created_date) 
	   				values (?,?,?,?,?,?,?,?,?,?,?,?)',array($feedbackId,$data['doe'],$data['jobtitle'],$data['whyEmpLeft'],$data['terminated'],$data['issues'],$data['rehire'],$data['salary'],$data['grade'],$data['ethical'],$data['comments'],$createdDate));
				
			 DB::update('update jfeedbacklink SET Status=?
	   				WHERE feedbackId=?',array(1,$feedbackId));
					
					
					
		   		return redirect('feedback/status/success');	
			
		}
		
	
		 
	}
	
	
	
}


