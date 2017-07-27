<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Backend\Basetables;

use DB;


class BaseTablesController extends Controller
{
   

	public function home()
                { 
                    return view('backend.basetables.bastablehome'); 
                }
         public function locationindex() 
                 {

                    return view('backend.basetables.location')->with(array("data"=>Basetables::getlocation()));
                    
                  }
          public function addLocation(Request $request,Response $response) 
                 {
                    $location_name=$request->location;
                    DB::table('_locations')->insert(
                                                ['locationName' =>$location_name, 'status' => 1]
                                            );
                     return response()->json(array(
                                                        'success' => true,
                                                        'msg' => "Added"
                                                        ));
                  }
           public function editLocation(Request $request,Response $response) 
                 {
            
                    $locationid=$request->locid;
                    $locationname=$request->locname;
                   $res = DB::table('_locations')
                                ->where('locationId',$locationid )
                                ->update(array('locationName' =>$locationname));
                     return response()->json(array('success' => true,
                                                        'msg' => "Updated"
                                                        ));
                  }
             public function deleteLocation(Request $request,Response $response) 
                 {
            
                    $locationid=$request->locid;
                    
                    $res=DB::table('_locations')->where('locationId',$locationid)->delete();
                    if($res)
                    {
                        return response()->json(array(
                                                           'success' => true,
                                                           'msg' => "Deleted"
                                                           ));
                     }
                     else
                     {
			 return response()->json(array(
					'success' => false,
					'errors' => "not deleted"
					));
                     }
                 }
             public function eductaionindex() 
                 {

                    return view('backend.basetables.education')->with(array("data"=>Basetables::geteducation()));
                    
                  }
                  
            public function addEducation(Request $request,Response $response) 
              {
                 $education_name=$request->education;
                 DB::table('_educations')->insert(
                                             ['educationName' =>$education_name]
                                         );
                  return response()->json(array(
                                                     'success' => true,
                                                     'msg' => "Added"
                                                     ));
               }
        public function editEducation(Request $request,Response $response) 
              {

                 $educationid=$request->educationid;
                 $eduname=$request->eduname;
                $res = DB::table('_educations')
                             ->where('educationId',$educationid )
                             ->update(array('educationName' =>$eduname));
                  return response()->json(array(
                                                     'success' => true,
                                                     'msg' => "Updated"
                                                     ));
               }
          public function deleteEducation(Request $request,Response $response) 
              {

                 $edu_id=$request->edu_id;
                 $res=DB::table('_educations')->where('educationId',$edu_id )->delete();
                 if($res)
                 {
                     return response()->json(array(
                                                        'success' => true,
                                                        'msg' => "Deleted"
                                                        ));
                  }
                  else
                  {
                      return response()->json(array(
                                     'success' => false,
                                     'errors' => "not deleted"
                                     ));
                  }
              }
}
