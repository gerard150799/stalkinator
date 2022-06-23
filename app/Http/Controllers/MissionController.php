<?php

namespace App\Http\Controllers;

use App\Models\Missions;
use Laratrust\Laratrust;
use Illuminate\Http\Request;
use App\Models\lecturerProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function index(Request $request){
        $missions = Missions::with('lecturerProfile')->get();
        $difficulties = DB::table('missions')->select('difficulty')->distinct()->get()->pluck('difficulty');

        $missions = Missions::query();

        if($request->filled('difficulty')){
            $missions->where('difficulty', $request->difficulty);
        }

        //return $request->all();
        return view('missions', [
            'difficulties'=> $difficulties,
            'missions'=> $missions->paginate(4),
        ], compact('difficulties', 'missions'));
        
        
        
        //return view('missions', compact('missions'));
    }

    public function store(Request $request){
        return $request->all();
        return view('missions');
    }

    

    
}
