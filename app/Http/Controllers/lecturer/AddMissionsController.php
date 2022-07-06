<?php

namespace App\Http\Controllers\lecturer;

use App\Models\Missions;
use Illuminate\Http\Request;
use App\Models\lecturerProfile;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddMissionsController extends Controller
{
    public function index(){
        $user = auth()->user();
        $lecturer= lecturerProfile::where('user_id', $user->id)->first();
        return view('lecturer.addmissions',  compact('user', 'lecturer',));
    }

    public function saveMissions(Request $request){
        //dd($request);
        $user = auth()->user();
        $lecturer = lecturerProfile::where('user_id', $user->id)->get();

        $this->validate($request, [
            'missionInstruction' => 'required',
            'difficulty' => 'required'
        ]);
        $storeMission = new Missions();
        $storeMission->mission_instruction = $request->missionInstruction;
        $storeMission->difficulty = $request->difficulty;
        $storeMission->save();
        
        return redirect()->route('missions');
    }

}
