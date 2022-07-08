<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentProfile;
use Illuminate\Support\Facades\DB;

class leaderboardController extends Controller
{
    public function index(){
    $leaderboardData = DB::table('student_profiles')
                        ->select('fullName', 'points')
                        ->orderBy('points', 'desc')
                        ->get();


        return view('leaderboard', compact('leaderboardData'));
    }
}
