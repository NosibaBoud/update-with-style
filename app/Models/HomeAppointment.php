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
           // 'user_investigation_id',
            'first_name',
            'last_name',
            'email',
            'address',
            'phone_number',
            'gender',
           // 'date_of_birth',
            'time',
            'date',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userInvestigation()
    {
        return $this->belongsTo(UserInvestigation::class);
    }

    public function investigation()
    {
        return $this->belongsTo(Investigation::class);
    }
}
