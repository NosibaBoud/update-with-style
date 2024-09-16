<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use App\Models\mtest;
use App\Models\mytests;
use app\Models\User;
use App\Models\UserInvestigation;
use Illuminate\Http\Request;

class Usertestscontroller extends Controller
{
  public function store($id) { 
    $test=Investigation::find($id);

    UserInvestigation::create([
      'investigation_id'=>$id,
      'user_id'=>"1",
    
    ]);
    
    return redirect()->back();
  }
}
