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
            
                    $locationid=$request->locationid;
                    $locationname=$request->locname;
                   $res = DB::table('_locations')
                                ->where('locationId',$locationid )
                                ->update(array('locationName' =>$locationname));
                     return response()->json(array(
                                                        'success' => true,
                                                        'msg' => "Updated"
                                                        ));
                  }
             public function deleteLocation(Request $request,Response $response) 
                 {
            
                    $locationid=$request->locat_id;
                    $res=DB::table('_locations')->where('locationId',$locationid )->delete();
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
