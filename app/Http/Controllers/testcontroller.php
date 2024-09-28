<?php

namespace App\Http\Controllers;

use App\Models\Investigation;

class testcontroller extends Controller
{

    public function search()
    {
        $search_text=$_GET['search'];
        $tests=Investigation::where('name','like','%'.$search_text.'%')->get();
        return view('search',compact('tests'));

    }
}

