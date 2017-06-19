<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use App\Services\Access\Traits\CompanyJobUpload;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;

/**
 * Class AuthController
 * @package App\Http\Controllers\Frontend\Auth
 */
class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, CompanyJobUpload, ConfirmUsers, ThrottlesLogins, UseSocialite;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Where to redirect users after they logout
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * @param UserRepositoryContract $user
     */
	 
	public function displayimage($category,$year,$month,$name,$time,$size,$ext)
    {
        header('Content-type: image/jpeg'); 
		die(file_get_contents(app_path() . "/Storage/Images/$category/$year/$month/$year" . "_" . $month . "_" . $time ."_" . $name . "_" . $size ."." . $ext));
    }

	 
    public function __construct(UserRepositoryContract $user)
    {
        $this->user = $user;
    }
}