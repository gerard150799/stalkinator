<?php

namespace App\Http\Controllers\lecturer;

use App\Models\User;
use App\Models\Missions;
use Illuminate\Http\Request;
use App\Models\lecturerProfile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class manageMissionController extends Controller
{
    public function index($id){
        $user = auth()->user();
        $lecturer= lecturerProfile::where('user_id', $user->id)->first();

        $mission= DB::select('select * from missions where id = ?', [$id]);
        return view('lecturer.editmission',  compact('user', 'lecturer'), ['mission'=>$mission]);
    }

    public function updateMission(Request $request, $id){
        $mission_instruction = $request->input('missionInstruction');
        $difficulty = $request->input('difficulty');

        DB::update('update missions set mission_instruction = ?, difficulty = ? where id = ?', [$mission_instruction, $difficulty, $id]);

        return redirect('missions');

    }

    public function deleteMission($id)
    {
        $mission = Missions::find($id);
        $mission->delete();
        return redirect()->route('missions');
    }
}
