<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentProfile extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'fullName',
        'studentID',
        'image'
    ];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function AttemptMissions()
    {
        return $this->belongsToMany(Mission::class)->withPivot('mission_id', 'status')->withTimestamps();
    }
}
