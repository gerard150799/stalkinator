<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturerProfile extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'lecturerName',
        'lecturerID',
        'image'
    ];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }
}
