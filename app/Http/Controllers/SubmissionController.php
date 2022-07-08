<?php

namespace App\Http\Controllers;

use App\Models\Missions;
use App\Models\Submissions;
use Illuminate\Http\Request;
use App\Models\studentProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    //
    public function index(Request $request){
        $submissionData = Submissions::join('student_profiles', 'student_profiles.id', '=', 'submissions.student_profile_id')
                                        ->get(['student_profiles.fullName', 'student_profiles.studentID', 'submissions.submissionFile', 'submissions.created_at']);


        $studentNames = DB::table('student_profiles')->select('fullName')->distinct()->get()->pluck('fullName');

        $students = studentProfile::query();

        if($request->filled('studentName')){
            $students->where('studentName', $request->studentName);
        }

        return view('lecturer.submissions',[
            'studentNames'=> $studentNames,
            'student'=>$students,
        ],compact('submissionData','studentNames', 'students'));
    }


   
    public function assignPoints(Request $request, $student_name){
        /* $studentName = DB::table('student_profiles')->select('fullName')->distinct()->get()->pluck('difficulty');

        $students = studentProfile::query();

        if($request->filled('studentName')){
            $students->where('studentName', $request->studentName);
        } */

        $student_name = $request->input('studentName');
        $points = $request->input('points');

        $updatePoints = studentProfile::where('fullName', $student_name)->firstOrFail()
                                        ->update(array('points'=>$points));

        return redirect()->route('lecturer.submissions');

    
    }


}
