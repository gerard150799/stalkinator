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
        'image',
        'points'
    ];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Submission(){
        return $this->hasMany(Submissions::class);
    }
}
