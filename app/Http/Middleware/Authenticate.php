<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class Authenticate
 * @package App\Http\Middleware
 */
class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      
	   if(isset($_SESSION['WHILLO']['STATUS']) && (isset($_SESSION['WHILLO']['STATUS'])) && (isset($_SESSION['WHILLO']['TYPE'])))
	   {
		   
		   if($_SESSION['WHILLO']['TYPE'] == "C" || $_SESSION['WHILLO']['TYPE'] == "E")
		   if($_SESSION['WHILLO']['TYPE'] == "C")$GLOBALS['redirect'] = "company";
		   if($_SESSION['WHILLO']['TYPE'] == "E")$GLOBALS['redirect'] = "employee";
		   return $next($request);
	   }  
	   return redirect()->guest('/');
	   
	   /* if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }*/

        
    }
}