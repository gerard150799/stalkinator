<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Missions;
use App\Models\Submissions;
use Illuminate\Http\Request;
use App\Models\studentProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class submitFindingsController extends Controller
{
    public function index($id){
        $user = auth()->user();
        $student= studentProfile::where('user_id', $user->id)->first();

        $mission= Missions::where('id', $id)->first();
        //$mission = DB::select('select * from missions where id = ?', $id);
        return view('student.submitfindings', compact('user', 'student', 'mission'));

    }

    public function storeSubmission(Request $request){
        
        //$missionID = Missions::getKey();
        $this->validate($request, [
            'file' => 'required'

        ]);

        //$storeMissionID = $missionID;
        
        //Missions::get('id');
        //DB::table('missions')->select('id', $id)->get();
        //Missions::where('id', $id)->get('id');
        //error_log($storeMissionID[0]);

        $storeNewSubmission = new Submissions();
        $storeNewSubmission->student_profile_id = session()->get('studentProfile_id');
        //$storeNewSubmission->mission_id = $storeMissionID;
        $submissionFile = $request->file;
        $submissionFileName = time(). '.' .$submissionFile->getClientOriginalExtension();
        $request->file->move('assets', $submissionFileName);
        $storeNewSubmission->submissionFile = $submissionFileName;
        $storeNewSubmission->save();

        return redirect()->route('missions')->with('success', 'submitedd');
    }
}
