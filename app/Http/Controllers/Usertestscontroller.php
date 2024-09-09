<?php

namespace App\Http\Controllers;

use App\Models\mtest;
use App\Models\mytests;
use app\Models\User;
use Illuminate\Http\Request;

class Usertestscontroller extends Controller
{
public function store($id){ 
    $test=mtest::find($id);
    mytests::create([
      'mtest_id'=>$id,
      'user_id'=>"1",
    
    ]);
    return redirect()->back();
    }
}
