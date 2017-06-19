<?php

namespace App\Services\Access\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exceptions\GeneralException;
use App\Events\Frontend\Auth\UserLoggedIn;
use App\Events\Frontend\Auth\UserLoggedOut;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests\Frontend\Auth\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Validator;

use DB;
use Hash;

/**
 * Class AuthenticatesUsers
 * @package App\Services\Access\Traits
 */
trait AuthenticatesUsers
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('frontend.auth.login')
            ->withSocialiteLinks($this->getSocialLinks());
    }

    /**
     * @param LoginRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
       $rules = array('username' => 'required|Min:6','password' => 'required|Min:6');
	   $validator = Validator::make($request->all(), $rules); 
		
	   if ($validator->fails()) {
			return response()->json(array(
					'success' => false,
					'errors' => $validator->getMessageBag()->toArray()
					));
	   }
	   
	   $user = DB::table('userlogin as u')
	   				->join('_role as r', 'r.roleId', '=', 'u.roleId')	
					->leftjoin('jmaster as j','j.userId','=','u.userId')
					->leftjoin('commaster as c','c.userId','=','u.userId')
	   				->select('u.userId','u.password','r.roleCode','j.seekerId','c.companyId')
					->orWhere('u.userName', '=', $request->input('username'))
					->orWhere('u.emailAddress', '=', $request->input('username'))
	   				->first();
	   if($user){
			if (Hash::check($request->input('password'), $user->password)) {
				$url ="";
				if($user->roleCode=="WHILLO001"){
					$url="/auth/signup";
					$_SESSION['WHILLO']['STATUS']=true;
					$_SESSION['WHILLO']['USERID']=$user->userId;
					$_SESSION['WHILLO']['SEEKERID']=$user->seekerId;
					$_SESSION['WHILLO']['TYPE']="E";
				}
				if($user->roleCode=="WHILLO002"){
					$url="/company/signup";
					$_SESSION['WHILLO']['STATUS']=true;
					$_SESSION['WHILLO']['USERID']=$user->userId;
					$_SESSION['WHILLO']['COMPAnyID']=$user->companyId;
					$_SESSION['WHILLO']['TYPE']="C";
				}
				
				return response()->json(array(
					'success' => true,
					'errors' => "Login succesfully completed",
					'url' => $url
					));	
			}
		}
		
		return response()->json(array(
					'success' => false,
					'errors' => "Invalid username/email or password"
					)); 
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
       session_destroy();
	   return Redirect::to('/');
    }

    /**
     * This is here so we can use the default Laravel ThrottlesLogins trait
     *
     * @return string
     */
    public function loginUsername()
    {
        return 'email';
    }

    /**
     * @param Request $request
     * @param $throttles
     * @return \Illuminate\Http\RedirectResponse
     * @throws GeneralException
     */
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        /**
         * Check to see if the users account is confirmed and active
         */
        if (! access()->user()->isConfirmed()) {
            $id = access()->user()->id;
            auth()->logout();
            throw new GeneralException(trans('exceptions.frontend.auth.confirmation.resend', ['user_id' => $id]));
        } elseif (! access()->user()->isActive()) {
            auth()->logout();
            throw new GeneralException(trans('exceptions.frontend.auth.deactivated'));
        }

        event(new UserLoggedIn(access()->user()));
        return redirect()->intended($this->redirectPath());
    }
}
