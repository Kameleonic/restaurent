<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'phone',
        'email',
        'date',
        'time',
        'guest_count',
        'message',
    ];
}
