<?php

namespace App\Http\Controllers;

use App\Models\Missions;
use Illuminate\Http\Request;
use Laratrust\Laratrust;
use Illuminate\Support\Facades\Auth;
use App\Models\lecturerProfile;

class MissionController extends Controller
{
    public function index(){
        $missions = Missions::with('lecturerProfile')->get();


        return view('missions', compact('missions'));
    }
}
