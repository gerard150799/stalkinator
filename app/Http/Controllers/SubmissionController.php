<?php

namespace App\Http\Controllers;

use App\Models\Missions;
use App\Models\Submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    //
    public function index(){



        return view('lecturer.submissions');
    }

    /* public function storeSubmission(Request $request, $id){

        $findMissionID = Missions::where('id', $id)->first();
        
        $storeNewSubmission = new Submissions();
        $storeNewSubmission->student_profile_id = session()->get('studentProfile_id');
        $storeNewSubmission->mission_id =$findMissionID;
        $submissionFile = $request->file;
        $submissionFileName = time(). '.' .$submissionFile->getClientOriginalExtension();
        $request->file->move('assets', $submissionFileName);
        $storeNewSubmission->submissionFile = $submissionFileName;
        $storeNewSubmission->save();

        return redirect()->route('missions')->with(['findMissionID' => $findMissionID]);
    } */
}
