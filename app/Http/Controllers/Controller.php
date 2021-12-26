<?php

namespace App\Http\Controllers;

use App\Models\CategoryOfDepartment;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\FacultyDetails;
use App\Models\FeeRange;
use App\Models\University;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $universities = University::privateUniversities()->get();
        $universities_ids = $universities->pluck('id')->toArray();
        $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
        return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
    }
    public function all_unversities()
    {
        $universities = University::all();
        $universities_ids = $universities->pluck('id')->toArray();
        $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
        return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
    }
    public function search(Request $request)
    {
        if(empty($request->name)){return redirect()->back();}
        $universities = University::all();
        $universities_ids = $universities->pluck('id')->toArray();
        $faculties = Faculty::query()->where('name','LIKE','%'.$request->name.'%')
        ->whereIn('university_id',$universities_ids)->get();
        return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
        
    }
    public function side_search(Request $request)
    {
        /*$universities = University::get();
        $faculties = Faculty::get();
        $universities = collect($universities,$faculties);
        return $universities->filter(function ($value,$key){
            return $value->area=='Cairo';
        });*/
        $faculties_ids = [];
        $faculties_ids_by_locations = [];
        $universities = [];
        $universities_ids = [];

        /*if(!count($request->all()) > 0) {

            dd('request all input not empty.');
    
        }*/
        /*
            if(empty($request->stateListName) && empty($request->university_sector)){
        $universities = University::all();
        $universities_ids = $universities->pluck('id')->toArray();
        }*/
        
        
        if(!empty($request->stateListName)){
            if(!empty($request->university_sector)){
                if($request->university_sector == "Public University")
                {   
                    $universities = University::query()->where('area','LIKE','%'.$request->stateListName.'%')
                    ->privateUniversities()->get();
                    $universities_ids = $universities->pluck('id')->toArray();
                    $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
                    $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
                }
                if($request->university_sector == "Private University")
                {   
                    $universities = University::query()->where('area','LIKE','%'.$request->stateListName.'%')
                    ->where('private','1')->get();
                    $universities_ids = $universities->pluck('id')->toArray();
                    $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
                    $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
                }
        }
        else{
                    $universities = University::query()->where('area','LIKE','%'.$request->stateListName.'%')->get();
                    $universities_ids = $universities->pluck('id')->toArray();
                    $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
                    $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
           }
        }
        else{
            if(!empty($request->university_sector))
            {
                if($request->university_sector == "Public University")
                {
                    $universities = University::privateUniversities()->get();
                    $universities_ids = $universities->pluck('id')->toArray();
                    $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
                    $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
                }
                if($request->university_sector == "Private University")
                {
                    $universities = University::query()->where('private','1')->get();
                    $universities_ids = $universities->pluck('id')->toArray();
                    $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
                    $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
                }
            }
        }
        
        if(!empty($request->item))
        {
            
            $department_ids =[];
            foreach($request->item as $item){
                $Categories = CategoryOfDepartment::query()->where('name',$item)->get();
                $department_ids = array_merge( $department_ids,$Categories->pluck('department_id')->toArray());
                }
            $fac_ids = Department::whereIn('id',$department_ids)->get();
            if(!empty($request->stateListName) || !empty($request->university_sector))
            {
            $faculties = Faculty::query()->whereIn('university_id',$universities_ids)
            ->whereIn('id',$fac_ids)->get();
            $faculties_ids = $faculties->pluck('id')->toArray();
            //return view('Universities',compact('universities',$universities),compact('faculties',$faculties));
            }
            else
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            $faculties = Faculty::query()->whereIn('university_id',$universities_ids)
            ->whereIn('id',$department_ids)->get();
            $faculties_ids = array_merge( $faculties_ids,$faculties->pluck('id')->toArray());
            }
        }
        if(!empty($request->fee_range))
        {
            if(empty($request->stateListName) || empty($request->university_sector))
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            }
            $fee_range_ids = [] ;
            foreach($request->fee_range as $fee){
            $range = FeeRange::query()->where('fee_range',$fee)->get();
            $fee_range_ids = array_merge($fee_range_ids,$range -> pluck('id')->toArray());
            }
            $fac_ids = FacultyDetails::whereIn('fee_range_id',$fee_range_ids)->get()->pluck('faculty_id');
            if(!empty($request->stateListName) || !empty($request->university_sector)){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$fac_ids)->get();
                $faculties_ids = $faculties->pluck('id')->toArray();
            }
            else $faculties_ids = array_merge( $faculties_ids,$fac_ids->toArray());
        }
        if(!empty($request->format))
        {
            if(empty($request->stateListName) && empty($request->university_sector))
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            }
            $fac_ids =[];
            foreach($request->format as $format){
                if(!empty($request->item) && $format=='full')
                {
                    break;
                }
            $faculty_details = FacultyDetails::query()->where('format',$format)->get();
            $fac_ids = array_merge( $fac_ids,$faculty_details->pluck('faculty_id')->toArray());
            if($format=='part')$faculties_ids = $fac_ids;
            else $faculties_ids = array_merge( $faculties_ids,$fac_ids);
            }
            if(!empty($request->stateListName) || !empty($request->university_sector)){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$faculties_ids)->get();
                $faculties_ids = $faculties->pluck('id')->toArray();
                array_merge( $faculties_ids,$faculties_ids);
            }
            if(isset($request->duration))$faculties_ids = [];
        }
        if(!empty($request->duration))
        {
            if(empty($request->stateListName) && empty($request->university_sector))
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            }
            foreach($request->duration as $duration){
            $faculty_details = FacultyDetails::query()->where('duration',$duration)->get();
            
           // array_push($faculties_ids,$faculty_details->pluck('faculty_id')->toArray());
           $fac_ids = $faculty_details->pluck('faculty_id')->toArray();
           $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$fac_ids)
            ->get();
            if(!empty($request->stateListName) || !empty($request->university_sector)){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$fac_ids)->get();
                $faculties_ids = $faculties->pluck('id')->toArray();
            }
            else $faculties_ids = array_merge( $faculties_ids,$fac_ids);
            if($request->duration == '7'){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id','7')->get();
                array_merge( $faculties_ids, $faculties->pluck('id')->toArray());
            }
        }
        }
        if(!empty($request->attendence))
        {
            if(empty($request->stateListName) && empty($request->university_sector))
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            }
            $fac_ids =[];
            foreach($request->attendence as $attendence){
                if(!empty($request->item) && $attendence=='on campus')break;
                
            $faculty_details = FacultyDetails::query()->where('attendence',$attendence)->get();
            $fac_ids = array_merge( $fac_ids,$faculty_details->pluck('faculty_id')->toArray());
            }
            if(!empty($request->stateListName) || !empty($request->university_sector)){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$fac_ids)->get();
                $faculties_ids = $faculties->pluck('id')->toArray();
            }
            else $faculties_ids = array_merge( $faculties_ids,$fac_ids);
        }
        if(!empty($request->joint_programmes))
        {
            if(empty($request->stateListName) && empty($request->university_sector))
            {
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            }
            $fac_ids =[];
            $faculty_details = FacultyDetails::query()->where('attendence',$request->joint_programmes)->get();
            $fac_ids = array_merge( $fac_ids,$faculty_details->pluck('faculty_id')->toArray());
            if(!empty($request->stateListName) || !empty($request->university_sector)){
                $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->whereIn('id',$fac_ids)->get();
                $faculties_ids = $faculties->pluck('id')->toArray();
            }
            else $faculties_ids = array_merge( $faculties_ids,$fac_ids);
        }
        
        $faculties = Faculty::whereIn('id',$faculties_ids)->get();
        //$universities_ids = $universities->pluck('id')->toArray();
        //$universities = University::whereIn('id',$universities_ids)->paginate(3);
        //return count($faculties);
        return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
    
    }
    // paginate(15) view    {{$faculties->render()}}
    public function search_by_location(Request $request)
    {
        if(empty($request)){return redirect()->back();}
        if(!empty($request->area))
        {
            $universities = University::query()->where('area','LIKE','%'.$request->area.'%')->privateUniversities()->get();
            $universities_ids = $universities->pluck('id')->toArray();
            if(!empty($request->faculty_name))
            {
                $faculties = Faculty::query()->where('name','LIKE','%'.$request->faculty_name.'%')
                ->whereIn('university_id',$universities_ids)->get();
                return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
            }
           $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->get();
            return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
        }
        if(!empty($request->faculty_name))
        {
            $universities = University::privateUniversities()->get();
            $universities_ids = $universities->pluck('id')->toArray();
            $faculties = Faculty::query()->where('name','LIKE','%'.$request->faculty_name.'%')
            ->whereIn('university_id',$universities_ids)->get();
                return view('Universities',compact('universities',$universities),compact('faculties',$faculties))->with('count',count($faculties));
        }
    }
    public function public_university()
    {
        $universities = University::privateUniversities()->get();
        return $universities_ids = $universities->pluck('id')->toArray();
    }
}
