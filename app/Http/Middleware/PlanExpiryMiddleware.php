<?php

namespace App\Http\Middleware;
use Closure;
use DB;
use RedirectsUsers;
use Illuminate\Support\Facades\Auth;

/**
 * Class Authenticate
 * @package App\Http\Middleware
 */
class PlanExpiryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
       // Perform action
      if(isset($_SESSION)  &&  isset($_SESSION['WHILLO']['COMPAnyID']))
      {
        $userid=$_SESSION['WHILLO']['USERID'];
        $companyid=$_SESSION['WHILLO']['COMPAnyID'];
        $type= $companyid=$_SESSION['WHILLO']['TYPE'];
        $res = DB::table('commaster')     
                    ->where('userId', $userid )
                    ->first();
            if($res->accountStatus == 0 && $type="C")
            {
                //return response('frontend.myaccount.companyplans');
                //return redirect()->route('company/choose_plans');
                return redirect('company/choose_plans');
            }
           else if($res->accountStatus == 2 && $type="C")
            {
                //return response('frontend.myaccount.companyplans');
                //return redirect()->route('company/choose_plans');
                return redirect('company/plan_expiry');
            }
            else
            {
                return $next($request);
            }
        }  
         return $next($request);
    }
    
}