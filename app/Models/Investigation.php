<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'details',
        'price',
        'expected_time_for_test',
        'instructions',
        'status',
        'can_taken',
        
    ];
}
