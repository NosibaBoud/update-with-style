<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Investigation;

class testcontroller extends Controller
{

    public function search()
    {
        $search_text=$_GET['search'];
        $tests=Investigation::where('name','like','%'.$search_text.'%')->get();
        return view('search',compact('tests'));

    }
    //public function investigationsearch()
    //{
       // $search_text=$_GET['query'];
       // $investigations=Investigation::where('name','like','%'.$search_text.'%')->get();
       // return view('admindashboard.investigationsearch',compact('investigations'));

    //}
}

