<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
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



            $message = Feedbackmail::send($users[0]->firstName, $get->EmailId, $randomString);
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
                ->select('c.jobTitle', 'c.experienceId', 'cp.companyName', 'l.locationName', 'e.experienceName')
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
    