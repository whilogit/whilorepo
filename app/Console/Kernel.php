<?php

namespace App\Console;

use DB;
use App\Services\Access\Traits\MailController;
use App\Http\Controllers\CcavenueHelperController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
        	 $plan_details = DB::table('companyplan as cp')                                       
                ->select('comm.companyId','p.duration','usr.userName','usr.emailAddress','cp.created_at')
                ->leftjoin('_plandetails as p','p.plan_id','=','cp.plan_id')
                ->leftjoin('commaster as comm','comm.companyId','=','cp.companyId')  
                ->leftjoin('userlogin as usr','usr.userId','=','comm.userId') 
                ->get();
                if(count($plan_details) > 0)
        {
		foreach($plan_details as $key => $details)
    		{
			$getExpiryDate = CcavenueHelperController::getExpiryDate($details->duration,'2017-07-06');
                	$emailDate = date('d-m-Y', strtotime('-5 days', strtotime($getExpiryDate)));
			 if(strtotime($emailDate) == strtotime(date('d-m-Y')))
               			{
					  $to=$details->emailAddress;
					   $sub='Plan Renewal Reminder';
					  $message='<b>Hi,'.$details->userName.
                       '</b><br/>Your plan will exipre on  '.$getExpiryDate.'<br/>Please Renew Your Plan Before the Expiry Date<br/> Regards,<br/><b>Team 	whilo</b>';
					 	$sendmail= MailController::sendmail($to,$sub,$message);
				}
			
		}
	}
     
           
        })->daily();
    }
}