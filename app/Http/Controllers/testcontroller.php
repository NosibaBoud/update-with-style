<?php

namespace App\Http\Controllers;

use App\Models\mtest;
use App\Models\mytests;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class testcontroller extends Controller
{

public function search()
{
    $search_text=$_GET['search'];
    $tests=mtest::where('name','like','%'.$search_text.'%')->get();
    return view('search',compact('tests'));

}

public function addtest($id)
{
    $test = mtest::find($id); // get test details by id

   session()->push('mytests',$test);

    return redirect()->back();
}

public function show()
{
    //$test=mtest::find($id);
    $test = session()->get('tests', []);
   return view('my tests',compact('test'));
}
}

