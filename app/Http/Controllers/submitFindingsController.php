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
            'submissionFile' => ['required','mimes:png,jpg,pdf,docx', 'max:2048'] 

        ]);

        //$storeMissionID = $missionID;
        
        //Missions::get('id');
        //DB::table('missions')->select('id', $id)->get();
        //Missions::where('id', $id)->get('id');
        //error_log($storeMissionID[0]);

        $storeNewSubmission = new Submissions();
        
        $storeNewSubmission->student_profile_id = session()->get('studentProfile_id');
        //$storeNewSubmission->mission_id = $storeMissionID;
        
        $submissionFile = $request->file('submissionFile')->getClientOriginalName();
        
        $submissionFileName = pathinfo($submissionFile, PATHINFO_FILENAME);
        
        $extension = $request->file('submissionFile')->getClientOriginalExtension();
        
        $submissionFileToStore= $submissionFileName.'_'.time().'.'.$extension; 
        
        $request->file('submissionFile')->move('storage', $submissionFileToStore);
        
        $storeNewSubmission->submissionFile = $submissionFileToStore;
        
        $storeNewSubmission->save();

        $storeNewSubmission = DB::table('submissions')
                                    ->whereNotNull('submissionFile')
                                    ->update(array('status'=>'Submitted'));

        

        return redirect()->route('missions')->with('success', 'submitedd');
    }

    public function download(Request $request,$submissionFile)
    {
        return response()->download(public_path('storage/'.$submissionFile));
    }
}
