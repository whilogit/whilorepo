<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Services\Access\Traits\MailController;
use App\Repositories\Frontend\Mail\Feedbackmail;
use DB;
use Hash;

/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait CompleteJobseeker {

    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jcomplete(Request $request, Response $response) {
        DB::update('update jmaster SET accountStatus=?
	   				WHERE seekerId=?', array(1, $_SESSION['WHILLO']['SEEKERID']));


        $fullname = "";

        $users = DB::table('jprofile')
                ->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
                ->get();

        $emails = DB::table('jfeedbackemails')
                ->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
                ->get();
        $createdDate = date("d-m-Y h:s:i");


        DB::table('jfeedbacklink')->where('seekerId', '=', $_SESSION['WHILLO']['SEEKERID'])->delete();
        foreach ($emails as $get) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 64; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $randomString = date("ymdhis") . "-" . $randomString . "-submit";
            $verificationcode = sprintf("%05d", mt_rand(1, 99999));
            $verificationhash = Hash::make($verificationcode);
            //$verificationhas=1234;


            $res = DB::insert('insert into jfeedbacklink(feedbackId,seekerId,linkName,VerificationCode,Status,createdDate) 
	   				values (?,?,?,?,?,?)', array($get->feedbackId, $_SESSION['WHILLO']['SEEKERID'], $randomString, $verificationhash, 0, $createdDate));


              $to=$get->EmailId;
         $sub='Feedback';
         $message =  '<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f98550" background="http://whilo.in/images/herogradient.jpg" style="height:450px; background-image: url("http://whilo.in/img/hero_gradient.jpg"); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover -o-background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
	  <tr>
	   <td>

		   	<table width="600" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   		<tbody>
		   			<tr>
		   				<td width="100%" height="40"></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<!--  Logo  -->
		   					<table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   						<tbody>
		   							<tr>
		   								<td>
		   									<a href="#"><img src="http://whilo.in/images/logo.png" alt="Holu" border="0" style="display: block;height: 46px;padding: 7%;background: white;border-radius: 7%;"/> </a>
		   								</td>
		   							</tr>
		   						</tbody>
		   					</table>

		   					<!--  navigation menu  -->
		   					<table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   						<tbody>
		   							<tr>
		   								<td height="8"></td>
		   							</tr>

		   							<tr>
		   								<td style="color: #fff; font-family: Raleway, arial; font-weight:600; font-size: 14px; letter-spacing:0.5px;">
	   										
	   										<a href="#" style="color: #fff; text-decoration:none;">Contact</a>
		   								</td>
		   							</tr>
		   						</tbody>
		   					</table>

		   				</td>
		   			</tr>
		   			<tr>
		   				<td height="169"></td>
		   			</tr>
		   			<tr>
		   				<td style="text-align:center; color: #fff; font-family: Raleway, arial; font-weight:600; font-size: 16px; text-transform:uppercase; letter-spacing:3px;">Find talented candidates though our social recruiting system based on their skills, interests and actions. Get verified profiles, candidate ratings from their current/ previous employer.</td>
		   			</tr>
		   			
		   		</tbody>
		   	</table>

	   </td>
	  </tr>
	 </table>


	 <!--  services  -->

	<!--  Services  -->
	<table width="600" align="center"  cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		<tbody>
		<tr>
												<td width="50" height="50">
													
												</td>
											</tr>
<tr>
												<td align="center">
													<img src="http://whilo.in/images/s1.png" alt="Service 1" border="0" style="display: block;"/>
												</td>
											</tr>
											<tr>
												<td width="20" height="20">
													
												</td>
											</tr>
			<tr>				<td style="color: #545454; font-family: Raleway, arial; font-weight:600; font-size: 16px; text-transform:uppercase;">
				As part of the process for hiring new employees, Whilo’s policy requires you to complete a
background check in order to work for corporate companies. You will not be charged any fee for this service.
This email will take you to whilo.in, where you have to verify Mr.Something.Please click on the below link to proceed.Thanks in advance. 
				</td>
			</tr>
			<tr>
												<td width="20" height="20">
													
												</td>
											</tr>
				<tr>
												<td width="20" height="20" style="color: #545454; font-family: Raleway, arial; font-weight:600; font-size: 16px;text:center;">
													<a href="http://whilo.in/feedback/'. $randomString .'" target="_blank">Click here to Verify Mr.'. $fullname . '</a>
												</td>
											</tr>							
			
		</tbody>
	</table>
	<!--  footer  -->
	<table width="100%" bgcolor="#f9823a" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		<tbody>
			<tr>
				<td>
					<table width="600" align="center" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
						<tbody>
							<tr>
								<td width="100%" height="40px"></td>
							</tr>
							<tr>
								<td>
									<!--  footer logo  -->
									<table  align="left" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tbody>
											<tr>
											
												<td width="20"></td>
												<td>
													<table cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
														<tr>
															<td width="100%" height="16"></td>
														</tr>
														<tr>
															<td style="color: #fff; font-family: Raleway; font-size: 12px;">© All rights reserved</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>

									<!--  footer social media  -->
									<table align="right" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tbody>
											<tr>
												<td width="100%" height="8"></td>
											</tr>
											<tr>
												<td>
													<a href="#"><img src="http://whilo.in/img/facebook.png" alt="facebook" border="0"/></a>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="#"><img src="http://whilo.in/img/twitter.png" alt="twitter" border="0"/></a>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="#"><img src="http://whilo.in/img/google+.png" alt="google+" border="0"/></a>
													
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td width="100%" height="40px"></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>';
         $sendmail= MailController::sendmail($to,$sub,$message); 
                                   
            //$message = Feedbackmail::send($users[0]->firstName, $get->EmailId, $randomString);
        }

        return response()->json(array(
                    'success' => true,
                    'errors' => "Registration successfully completed"
        ));
    }

    public function ccomplete(Request $request, Response $response) {
        DB::update('update commaster SET accountStatus=?
	   				WHERE companyId=?', array(1, $_SESSION['WHILLO']['COMPAnyID']));

        return response()->json(array(
                    'success' => true,
                    'errors' => "Registration successfully completed"
        ));
    }

    public function getAllEducationDetails() {


        return DB::table('jqualification as jq')
                        ->where('jq.seekerId', $_SESSION['WHILLO']['SEEKERID'])
                        ->join('_qualification as q', 'q.qualificationId', '=', 'jq.qualificationId')
                        ->join('_employmentmode as e', 'e.employmentmodeId', '=', 'jq.courcetypeId')
                        ->join('jkeyskill as k', 'k.seekerId', '=', 'jq.seekerId')
                        ->select('jq.id', 'jq.seekerId', 'jq.passingYear', 'jq.courceName', 'jq.specilizationName', 'jq.universityName', 'e.employmentmodeName', 'q.qualificationName', 'k.keyskills')
                        ->get();
    }

    public function updateEducation(Request $request) {
        //echo '<pre>';print_r($request->all());exit;

        if ($request->id) {

            $result = DB::table('jqualification')->where('id', $request->id)
                    ->update(array('passingYear' => $request->passYear, "qualificationId" => $request->hQuali, "seekerId" => $_SESSION['WHILLO']['SEEKERID'],
                'courceName' => $request->cources, 'courcetypeId' => $request->courseType, 'specilizationName' => $request->specalization,
                'universityName' => $request->university
            ));


            if (empty($result)) {
                return response()->json(array(
                            'success' => false,
                            'errors' => "Failed to change status"
                ));
            } else { {

                    return response()->json(array(
                                'success' => true,
                                'errors' => "Status successfully changed"
                    ));
                }
            }
        } else {
            $result = DB::table('jqualification')->insert([
                ['passingYear' => $request->passYear, "qualificationId" => $request->hQuali, "seekerId" => $_SESSION['WHILLO']['SEEKERID'],
                    'courceName' => $request->cources, 'courcetypeId' => $request->courseType, 'specilizationName' => $request->specalization,
                    'universityName' => $request->university]]);
            $ids = DB::getPdo()->lastInsertId();


            if (empty($result)) {
                return response()->json(array(
                            'success' => false,
                            'errors' => "Failed to change status"
                ));
            } else {

                return response()->json(array(
                            'success' => true,
                            'errors' => "Status successfully changed",
                            'id' => $ids,
                            'insert' => 1,
                ));
            }
        }
    }

    public function getAllqualificationList() {

        $result = DB::table('_qualification')->get();
        echo json_encode($result);
    }

    public function getcourseTypes() {

        $result = DB::table('_employmentmode')->get();
        echo json_encode($result);
    }

    //profile

    public function getallProfileDetails() {

        $result = DB::table('jprofile')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->get();
        echo json_encode($result);
    }

    public function updateProfileDetails(Request $request) {
        // echo "<pre>";echo $_SESSION['WHILLO']['SEEKERID'];
        //  print_r($request->all());exit;
        $result = DB::table('jprofile')->where('seekerId', $request->id)
                ->update(array('mobileNumber' => $request->mobileNum, "firstName" => $request->fullName,
            "lastName" => $request->fullName,
            'city' => $request->city,
            'pinCode' => $request->pincode,
            'address' => $request->address,
            'gender' => $request->gender,
            'shortBio' => $request->bio,
        ));

        if (empty($result)) {
            return response()->json(array(
                        'success' => false,
                        'errors' => "Failed to change status"
            ));
        } else {

            return response()->json(array(
                        'success' => true,
                        'errors' => "Status successfully changed"
            ));
        }
    }

    public function getallAppliedJobs() {

        $result = DB::table('userappliedjobs as u')
                ->join('companyjobs as c', 'c.jobId', '=', 'u.jobId')
                ->join('comprofile as cp', 'cp.companyId', '=', 'c.companyId')
                ->join('_locations as l', 'l.locationId', '=', 'c.locationId')
                ->join('_experience as e', 'e.experienceId', '=', 'c.experienceId')
                ->select('c.jobTitle', 'c.experienceId', 'cp.companyName', 'l.locationName', 'e.experienceName')
                ->where('u.seekerId', $_SESSION['WHILLO']['SEEKERID'])
                ->get();
        echo json_encode($result);
    }

    public function getallShortListedJobs() {

        $result = DB::table('shortlistjobs as s')
                ->join('comprofile as cp', 'cp.companyId', '=', 's.companyId')
                ->join('companyjobs as c', 'c.companyId', '=', 'cp.companyId')
                ->join('_locations as l', 'l.locationId', '=', 'c.locationId')
                ->join('_experience as e', 'e.experienceId', '=', 'c.experienceId')
                ->select('c.jobTitle', 'c.experienceId', 'cp.companyName', 'l.locationName', 'e.experienceName','c.jobId')
                ->where('s.seekerId', $_SESSION['WHILLO']['SEEKERID'])
                ->get();
        echo json_encode($result);
    }

    /* public function getAllProfessionalDetails() {

      $result = DB::table('jproffessional as jp')
      ->join('_industry as i', 'i.industryId', '=', 'jp.industryId')
      ->join('_functionalarea as f', 'f.functionalId', '=', 'jp.functionalarea')
      ->select('jp.exprstatus', 'f.functionalName', 'i.industryName','jp.id')
      ->where('jp.seekerId', $_SESSION['WHILLO']['SEEKERID'])
      ->get();
      echo json_encode($result);
      }

      public function getAllProfessionalList() {
      $result = DB::table('_industry')->get();
      echo json_encode($result);
      }

      public function getAllFuncationalArea() {
      $result = DB::table('_functionalarea')->get();
      echo json_encode($result);
      }

      public function updateProfessionalDetails(Request $request) {
      //echo '<pre>';print_r($request->all());exit;

      if ($request->id) {

      $result = DB::table('jproffessional')->where('id', $request->id)
      ->update(array('industryId' => $request->pName, "functionalarea" => $request->pArea,
      "seekerId" => $_SESSION['WHILLO']['SEEKERID'],
      "exprstatus" => $request->exp
      ));


      if (empty($result)) {
      return response()->json(array(
      'success' => false,
      'errors' => "Failed to change status"
      ));
      } else {

      return response()->json(array(
      'success' => true,
      'errors' => "Status successfully changed"
      ));
      }
      } else {
      $result = DB::table('jproffessional')->insert([
      ['industryId' => $request->pName, "functionalarea" => $request->pArea,
      "seekerId" => $_SESSION['WHILLO']['SEEKERID'],
      "exprstatus" => $request->exp]]);
      $ids = DB::getPdo()->lastInsertId();


      if (empty($result)) {
      return response()->json(array(
      'success' => false,
      'errors' => "Failed to change status"
      ));
      } else {

      return response()->json(array(
      'success' => true,
      'errors' => "Status successfully changed",
      'id' => $ids,
      'insert' => 1,
      ));
      }
      }
      } */

    public function comonylist() {
        $result = DB::table('jexperience')->where("seekerId", $_SESSION['WHILLO']['SEEKERID'])->get();
        echo json_encode($result);
    }

    public function companyUpdate(Request $request) {
//echo '<pre>';print_r($request->all());exit;
        if ($request->id) {

            $result = DB::table('jexperience')->where('id', $request->id)
                    ->update(array('companyName' => $request->cName, "description" => $request->des,
                "startYear" => $request->start,
                "endYear" => $request->end,
            ));


            if (empty($result)) {
                return response()->json(array(
                            'success' => false,
                            'errors' => "Failed to change status"
                ));
            } else {

                return response()->json(array(
                            'success' => true,
                            'errors' => "Status successfully changed"
                ));
            }
        } else {
            $result = DB::table('jexperience')->insert([
                ['companyName' => $request->cName, "description" => $request->des,
                    "startYear" => $request->start,
                    "endYear" => $request->end,
                    "seekerId" => $_SESSION['WHILLO']['SEEKERID'],
            ]]);
            $ids = DB::getPdo()->lastInsertId();


            if (empty($result)) {
                return response()->json(array(
                            'success' => false,
                            'errors' => "Failed to change status"
                ));
            } else {

                return response()->json(array(
                            'success' => true,
                            'errors' => "Status successfully changed",
                            'id' => $ids,
                            'insert' => 1,
                ));
            }
        }
    }
}
    