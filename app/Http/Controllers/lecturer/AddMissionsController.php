<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddMissionsController extends Controller
{
    public function index(){
        return view('lecturer.addmissions');
    }
}
