<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAppointment extends Model
{
    use HasFactory;
    protected $fillable=[
            'user_id',
            'investigation_id',
            'user_investigation_id',
            'first_name',
            'last_name',
            'email',
            'address',
            'phone_number',
            'gender',
            'age',
            'time',
    'date',

    ];
}
