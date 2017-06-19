<?php
namespace App\Repositories\Backend\Login;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Adminlogin extends Controller
{
	public static function login($data)
	{
		$admin =  DB::table('whiloadmins')
					->where('email',$data['email'])
					->select('adminId','password')
					->first();
		if($admin){
			if (Hash::check($data['password'], $admin->password)) {
				$_SESSION['whiloadmin']= true;
				return true;
			}
		}
		return false;
	}
    
}