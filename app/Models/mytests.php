<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mytests extends Model
{
    use HasFactory;
    protected $table='mytests';
    protected $fillable=[
      'mtest_id',
        'user_id',
      
    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function test()
{
    return $this->hasMany(mtest::class);
}
}
