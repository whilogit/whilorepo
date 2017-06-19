<?php

namespace App\Services\Access\Company;

/**
 * Class Access
 * @package App\Services\Access
 */
use DB;
class MyJobs
{
   public static function get($limit = 10, $offset = 1)
   {
	  
	  return DB::table('companyjobs as j')
					->leftjoin('companylogo as li', 'li.companyId', '=', 'j.companyId')
					->join('comprofile as com', 'com.companyId', '=', 'j.companyId')
					->distinct('j.companyId')
					->where('com.companyId',$_SESSION['WHILLO']['COMPAnyID'])					
					->skip($limit * ($offset -1))
       				->take($limit)
					->select('j.jobId','j.jobTitle','j.shortDescription','j.lastdate','j.createdDate','j.status')
					->leftjoin(DB::raw('(SELECT *,COUNT(*) as totalcount FROM userappliedjobs GROUP BY jobId) uajt' ), function($jobs){
						$jobs->on('j.jobId', '=', 'uajt.jobId');
					  })
					->leftjoin(DB::raw('(SELECT *,COUNT(*) as totalunseen FROM userappliedjobs WHERE seen = 0 GROUP BY jobId) uajs' ), function($jobs){
						$jobs->on('j.jobId', '=', 'uajs.jobId');
					  })
					  ->addSelect('uajt.totalcount','uajs.totalunseen')
					  ->orderBy('uajt.appliedDate', 'DESC')
					  ->orderBy('j.jobId', 'DESC')
					 ->get();

   }
}