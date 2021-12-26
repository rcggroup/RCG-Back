<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\University;
use Exception;

class PrivateUniversityController extends Controller
{
    public function index()
    {
        $universities = University::query()->where('private','1')->get();
        $universities_ids = $universities->pluck('id')->toArray();
        $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->paginate(10);
        return view('PrivateUniversities',compact('universities',$universities),compact('faculties',$faculties));
    }
    public function search(Request $request)
    {
        try{
            if(empty($request->name)){return redirect()->back();}
            $universities = University::all();
            $universities_ids = $universities->pluck('id')->toArray();
            $faculties = Faculty::query()->where('name','LIKE','%'.$request->name.'%')
            ->whereIn('university_id',$universities_ids)->paginate(10);
            if(empty($faculties)){return redirect()->back();}
            return view('privateUniversities',compact('universities',$universities),compact('faculties',$faculties));
        }catch(Exception $e){

    }
    }
    public function search_by_location(Request $request)
    {
        if(empty($request)){return redirect()->back();}
        if(!empty($request->area))
        {
            $universities = University::query()->where('area','LIKE','%'.$request->area.'%')->where('private','1')->get();
            $universities_ids = $universities->pluck('id')->toArray();
            if(!empty($request->faculty_name))
            {
                $faculties = Faculty::query()->where('name','LIKE','%'.$request->faculty_name.'%')
                ->whereIn('university_id',$universities_ids)->paginate(10);
                return view('privateUniversities',compact('universities',$universities),compact('faculties',$faculties));
            }
           $faculties = Faculty::query()->whereIn('university_id',$universities_ids)->paginate(10);
            return view('privateUniversities',compact('universities',$universities),compact('faculties',$faculties));
        }
        if(!empty($request->faculty_name))
        {
            $universities = University::where('private','1')->paginate(10);
            $universities_ids = $universities->pluck('id')->toArray();
            $faculties = Faculty::query()->where('name','LIKE','%'.$request->faculty_name.'%')
            ->whereIn('university_id',$universities_ids)->paginate(10);
                return view('privateUniversities',compact('universities',$universities),compact('faculties',$faculties));
        }
    }
}
// collapse [],[],[]  collect all array in one 
