<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
/**
 * Class Authenticate
 * @package App\Http\Middleware
 */
class AuthAdmin
{
    
    public function handle($request, Closure $next, $guard = null)
    {
     
	
	  if(isset($_SESSION['userid'])){  
		return redirect()->guest('/dashboard');	
	   }
	  return $next($request); 	
	}
}