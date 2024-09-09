<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtest extends Model
{
    use HasFactory;
  //  protected $table='mtests';
    protected $fillable=[
        'name',
        'details',
        'price',
        'expected_time_for_test',
        'instructions',
        'status',
        
        

    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function test(){
        return $this->belongsTo(mytests::class);
    }
    

}
