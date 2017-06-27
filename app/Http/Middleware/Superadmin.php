<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
/**
 * Class Authenticate
 * @package App\Http\Middleware
 */
class Superadmin
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
       
		 if(!isset($_SESSION['userid'])){  
			 return $next($request);
		}
		return redirect()->guest('/admin/auth/signin');	 
	}
}