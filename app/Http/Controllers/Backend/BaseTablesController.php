<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Backend\Basetables;
use DB;

class BaseTablesController extends Controller {

    public function home() {
        return view('backend.basetables.bastablehome');
    }

    public function locationindex() {

        return view('backend.basetables.location')->with(array("data" => Basetables::getlocation()));
    }

    public function addLocation(Request $request, Response $response) {
        $location_name = $request->addlocation;
        $res = DB::table('_locations')
                        ->where('locationName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_locations')->insert(
                    ['locationName' => $location_name, 'status' => 1]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editLocation(Request $request) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_locations')
                        ->where('locationName', $locationname)->where('locationId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_locations')
                    ->where('locationId', $locationid)
                    ->update(array('locationName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteLocation(Request $request, Response $response) {

        $locationid = $request->locid;

        $res = DB::table('_locations')->where('locationId', $locationid)->delete();
        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function eductaionindex() {

        return view('backend.basetables.education')->with(array("data" => Basetables::geteducation()));
    }

    public function addEducation(Request $request, Response $response) {

        $location_name = $request->addlocation;
        $res = DB::table('_educations')
                        ->where('educationName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Education Name already exists"
            ));
        } else {
            DB::table('_educations')->insert(
                    ['educationName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editEducation(Request $request) {




        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_educations')
                        ->where('educationName', $locationname)->where('educationId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Education Name already exists"
            ));
        } else {
            DB::table('_educations')
                    ->where('educationId', $locationid)
                    ->update(array('educationName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteEducation(Request $request) {

        $locationid = $request->locid;

        $res = DB::table('_educations')->where('educationId', $locationid)->delete();
        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function functionalindex() {

        return view('backend.basetables.functional')->with(array("data" => Basetables::getfunctional()));
    }

    public function addFunctional(Request $request) {
        $location_name = $request->addlocation;
        $res = DB::table('_functionalarea')
                        ->where('functionalName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Education Name already exists"
            ));
        } else {
            DB::table('_functionalarea')->insert(
                    ['functionalName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editFunctional(Request $request) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_functionalarea')
                        ->where('functionalName', $locationname)->where('functionalId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_functionalarea')
                    ->where('functionalId', $locationid)
                    ->update(array('functionalName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteFunctional(Request $request) {
        $locationid = $request->locid;

        $res = DB::table('_functionalarea')->where('functionalId', $locationid)->delete();

        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function industriesindex() {

        return view('backend.basetables.industries')->with(array("data" => Basetables::getindustries()));
    }

    public function addIndustries(Request $request) {
        $location_name = $request->addlocation;
        $res = DB::table('_industry')
                        ->where('industryName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_industry')->insert(
                    ['industryName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editIndustries(Request $request, Response $response) {
        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_industry')
                        ->where('industryName', $locationname)->where('industryId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_industry')
                    ->where('industryId', $locationid)
                    ->update(array('industryName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteIndustries(Request $request, Response $response) {
        $locationid = $request->locid;

        $res = DB::table('_industry')->where('industryId', $locationid)->delete();

        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function jobroleindex() {

        return view('backend.basetables.jobrole')->with(array("data" => Basetables::getjobrole(),"getrole"=> Basetables::getrolecategory()));
    }

    public function addJobrole(Request $request) {
        $location_name = $request->addlocation;
        $res = DB::table('_jobrole')
                        ->where('jobroleName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_jobrole')->insert(
                    ['jobroleName' => $location_name,]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editJobrole(Request $request) {
        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_jobrole')
                        ->where('jobroleName', $locationname)->where('jobroleId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_jobrole')
                    ->where('jobroleId', $locationid)
                    ->update(array('jobroleName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteJobrole(Request $request) {
        $locationid = $request->locid;

        $res = DB::table('_jobrole')->where('jobroleId', $locationid)->delete();
        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function jobrolecategoryindex() {

        return view('backend.basetables.jobrolecategory')->with(array("data" => Basetables::getrolecategory()));
    }

    public function addJobrolecategory(Request $request, Response $response) {
        $location_name = $request->addlocation;
        $res = DB::table('_jobrolecategory')
                        ->where('rolecategoryName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_jobrolecategory')->insert(
                    ['rolecategoryName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editJobrolecategory(Request $request) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_jobrolecategory')
                        ->where('rolecategoryName', $locationname)->where('rolecategoryId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_jobrolecategory')
                    ->where('rolecategoryId', $locationid)
                    ->update(array('rolecategoryName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteJobrolecategory(Request $request) {
        $locationid = $request->locid;

        $res = DB::table('_jobrolecategory')->where('rolecategoryId', $locationid)->delete();
        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function joiningtimeindex() {

        return view('backend.basetables.joiningtime')->with(array("data" => Basetables::getjoiningtime()));
    }

    public function addJoiningtime(Request $request) {
        $location_name = $request->addlocation;
        $res = DB::table('_joiningtime')
                        ->where('joiningtimeName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_joiningtime')->insert(
                    ['joiningtimeName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editJoiningtime(Request $request) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_joiningtime')
                        ->where('joiningtimeName', $locationname)->where('joiningtimeId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_joiningtime')
                    ->where('joiningtimeId', $locationid)
                    ->update(array('joiningtimeName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteJoiningtime(Request $request, Response $response) {
        $locationid = $request->locid;

        $res = DB::table('_joiningtime')->where('joiningtimeId', $locationid)->delete();

        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function keyskills() {

        return view('backend.basetables.keyskills')->with(array("data" => Basetables::getkeyskill()));
    }

    public function addKeyskills(Request $request, Response $response) {
        $location_name = $request->addlocation;
        $res = DB::table('_keyskill')
                        ->where('keyskillName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_keyskill')->insert(
                    ['keyskillName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editKeyskills(Request $request, Response $response) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_keyskill')
                        ->where('keyskillName', $locationname)->where('keyskillId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_keyskill')
                    ->where('keyskillId', $locationid)
                    ->update(array('keyskillName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteKeyskills(Request $request, Response $response) {
        $locationid = $request->locid;

        $res = DB::table('_keyskill')->where('keyskillId', $locationid)->delete();

        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function qualificationindex() {

        return view('backend.basetables.qualification')->with(array("data" => Basetables::getqualification()));
    }

    public function addQualification(Request $request, Response $response) {
        $location_name = $request->addlocation;
        $res = DB::table('_qualification')
                        ->where('qualificationName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Qualification name already exists"
            ));
        } else {
            DB::table('_qualification')->insert(
                    ['qualificationName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editQualification(Request $request, Response $response) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_qualification')
                        ->where('qualificationName', $locationname)->where('qualificationId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Location name already exists"
            ));
        } else {
            DB::table('_qualification')
                    ->where('qualificationId', $locationid)
                    ->update(array('qualificationName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteQualification(Request $request) {
        $locationid = $request->locid;

        $res = DB::table('_qualification')->where('qualificationId', $locationid)->delete();


        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

    public function salaryrangeindex() {

        return view('backend.basetables.salaryrange')->with(array("data" => Basetables::getsalaryrange()));
    }

    public function addSalaryrange(Request $request, Response $response) {
        $location_name = $request->addlocation;
        $res = DB::table('_salaryrange')
                        ->where('salaryName', $location_name)->count();
        if ($res == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Salary Range already exists"
            ));
        } else {
            DB::table('_salaryrange')->insert(
                    ['salaryName' => $location_name]
            );
            return response()->json(array(
                        'success' => true,
                        'msg' => "Added"
            ));
        }
    }

    public function editSalaryrange(Request $request, Response $response) {

        $locationid = $request->locid;
        $locationname = $request->locname;
        $count = DB::table('_salaryrange')
                        ->where('salaryName', $locationname)->where('salaryId', '!=', $locationid)->count();
        if ($count == 1) {
            return response()->json(array(
                        'success' => false,
                        'msg' => "Salary Range already exists"
            ));
        } else {
            DB::table('_salaryrange')
                    ->where('salaryId', $locationid)
                    ->update(array('salaryName' => $locationname));
            return response()->json(array('success' => true,
                        'msg' => "Updated"
            ));
        }
    }

    public function deleteSalaryrange(Request $request) {
        $locationid = $request->locid;

        $res = DB::table('_salaryrange')->where('salaryId', $locationid)->delete();


        if ($res) {
            return response()->json(array(
                        'success' => true,
                        'msg' => "Deleted"
            ));
        } else {
            return response()->json(array(
                        'success' => false,
                        'errors' => "not deleted"
            ));
        }
    }

}
