<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class Authenticate
 * @package App\Http\Middleware
 */
class AuthResumelist
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
		   
		   if($_SESSION['WHILLO']['TYPE'] == "C")
		    return $next($request);
		  
	   }  
	  	return $next($request);
	    return redirect()->guest('/');
	  
        
    }
}