<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'student_profile_id',
        'mission_id',
        'submissionFile',
        'status'
    ];

    public function studentSubmission(){
        return $this->hasOne(studentProfile::class);
    }
    
    public function Missions(){
        return $this->belongsTo(Missons::class, 'mission_id', 'id');
    }
}
