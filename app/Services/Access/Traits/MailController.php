<?php

namespace App\Services\Access\Traits;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class CcavenueHelperController
 * @package App\Http\Controllers
 */
trait MailController
{

    /**
     * @return \Illuminate\View\View
     */
   public static function sendmail(Request $request,Response $response)
    {
        $data = $request->all();
        //$to=$data['email_id'];
	$to='gauthami9111@gmail.com';
        $sub=$data['subject'];
        $message=$data['body'];
        $senderFromMail = 'whilo@gmail.com';
        $senderName ='whilo';
        Mail::send(array(),array(), function ($email) use($to,$senderFromMail,$senderName,$sub,$message)
        {

        $email->to($to)->from($senderFromMail, $senderName)->subject($sub);
        $email->setBody($message, 'text/html');
        });
            

            }
       public static function companymails($to,$subject,$body)
	    {
	       
	        $senderFromMail = 'whilo@gmail.com';
	        $senderName ='whilo';
	        Mail::send(array(),array(), function ($email) use($to,$senderFromMail,$senderName,$subject,$body)
	        {
	
	        $email->to($to)->from($senderFromMail, $senderName)->subject($subject);
	        $email->setBody($body, 'text/html');
	        });
	
	     }
	            
}


