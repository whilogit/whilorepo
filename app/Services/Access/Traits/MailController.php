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
   public static function sendmail($to,$subject,$body)
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


