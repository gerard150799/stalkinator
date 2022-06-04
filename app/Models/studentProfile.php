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
        'image'
    ];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }
}
