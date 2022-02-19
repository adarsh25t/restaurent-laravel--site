<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'guest',
        'time',
        'date',
        'user_id',
        'message'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
