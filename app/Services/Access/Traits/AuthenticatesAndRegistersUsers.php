<?php

namespace App\Services\Access\Traits;

/**
 * Class AuthenticatesAndRegistersUsers
 * @package App\Services\Access\Traits
 */
trait AuthenticatesAndRegistersUsers
{
    use AuthenticatesUsers,RegistersUsers,RegisterUserPersonal,RegisterRedirectsForms,RegisterUserQualification,RegisterUserProffessional,CompanyRegister,CompanyLogo,CompanyImages,CompleteRegistration,UploadProfileImage,UploadResume,UploadeCertifcates,CompleteJobseeker{
		AuthenticatesUsers::redirectPath insteadof RegistersUsers;
		AuthenticatesUsers::redirectPath insteadof RegisterUserPersonal;
		AuthenticatesUsers::redirectPath insteadof RegisterRedirectsForms;
		AuthenticatesUsers::redirectPath insteadof RegisterUserQualification;
		AuthenticatesUsers::redirectPath insteadof RegisterUserProffessional;
		AuthenticatesUsers::redirectPath insteadof CompanyRegister;
		AuthenticatesUsers::redirectPath insteadof CompanyLogo;
		AuthenticatesUsers::redirectPath insteadof CompanyImages;
		AuthenticatesUsers::redirectPath insteadof CompleteRegistration;
		AuthenticatesUsers::redirectPath insteadof UploadProfileImage;
		AuthenticatesUsers::redirectPath insteadof UploadResume;
		AuthenticatesUsers::redirectPath insteadof UploadeCertifcates;
		AuthenticatesUsers::redirectPath insteadof CompleteJobseeker;
		
		
	}
}