<?php

namespace App\Http\Controllers\lecturer;

use Illuminate\Http\Request;
use App\Models\lecturerProfile;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class editLecturerProfileController extends Controller
{
    //
    public function index(){

        $user = auth()->user();
        $lecturer = lecturerProfile::where('user_id', $user->id)->first();
        return view('lecturer.lecturereditprofile', compact('lecturer', 'user'));
    }

    public function saveAndUpdateProfile(Request $request)
    {
        if (request()->hasFile('image')) {
            $this->validate($request, [
                'lecturerName' => 'required',
                'lecturerID' => 'required',
                'image' => 'required | image'

            ]);
            if ($lecturer = lecturerProfile::where('id', session()->get('lecturerProfile_id'))->first()) {
                $imagePath = $request->image->store('uploads', 'public');
                $lecturer->lecturerName = $request->lecturerName;
                $lecturer->lecturerID = $request->lecturerID;
                $lecturer->image = $imagePath;
                $lecturer->save();
                return redirect()->back();
            } else {
                $storeLecturerProfile = new lecturerProfile();
                $storeLecturerProfile->user_id = Auth::user()->id;
                //$storeStudentProfile->user_id = $user_id;
                $imagePath = $request->image->store('uploads', 'public');
                $storeLecturerProfile->lecturerName = $request->lecturerName;
                $storeLecturerProfile->lecturerID = $request->lecturerID;
                $storeLecturerProfile->image = $imagePath;

                $storeLecturerProfile->save();
                //dd($imagePath);

                session(['lecturerProfile_id' => $storeLecturerProfile->id]);
                return redirect()->back();
            }
        } else {
            $this->validate($request, [
                'lecturerName' => 'required',
                'lecturerID' => 'required'

            ]);
            if ($lecturer = lecturerProfile::where('id', session()->get('studentProfile_id'))->first()) {
                $lecturer->lecturerName = $request->lecturerName;
                $lecturer->lecturerID = $request->lecturerID;
                $lecturer->save();
                return redirect()->back();
            } else {
                $storeLecturerProfile = new lecturerProfile();
                $storeLecturerProfile->user_id = Auth::user()->id;
                //$storeStudentProfile->user_id = $user_id;
                $storeLecturerProfile->lecturerName = $request->lecturerName;
                $storeLecturerProfile->lecturerID = $request->lecturerID;
                $storeLecturerProfile->image = "NULL";
                $storeLecturerProfile->save();

                session(['lecturerProfile_id' => $storeLecturerProfile->id]);
                return redirect()->back();
            }
        }

    }

}
