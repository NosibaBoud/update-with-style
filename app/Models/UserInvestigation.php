<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInvestigation extends Model
{
    use HasFactory;

    protected $fillable=[
        'investigation_id',
        'user_id',
      

    ];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function investigation(){
        return $this->belongsTo(Investigation::class);
    }
    public function appointment(){
        return $this->hasMany(HomeAppointment::class);
    }
}
