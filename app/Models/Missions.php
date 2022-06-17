<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    use HasFactory;
    protected $fillable = [
        'lecturer_profile_id',
        'mission_instruction',
        'difficulty',
    ];

    public function lecturerProfile(){
        return $this->belongsTo(lecturerProfile::class);
    }

    public function studentProfile(){
        return $this->belongsToMany(studentProfile::class);
    }
}
