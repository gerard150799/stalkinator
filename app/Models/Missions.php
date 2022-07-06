<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    use HasFactory;
    protected $fillable = [
        'mission_instruction',
        'difficulty'
    ];

    public function lecturerProfile(){
        return $this->belongsTo(lecturerProfile::class);
    }

    public function studentProfile(){
        return $this->belongsToMany(studentProfile::class);
    }

    public function Submissions(){
        return $this->hasMany(Submissions::class, 'mission_id', 'id');
    }
}
