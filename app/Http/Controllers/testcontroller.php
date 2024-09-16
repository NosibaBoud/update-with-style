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

    public function addtest($id)
    {
        $myInvestigations = Investigation::find($id); // get test details by id

        session()->push('mytests',$myInvestigations);

        return redirect()->back();
    }

    public function show($id)
    {
        $Investigation = Investigation::find($id);
        $Investigation = session()->get('Investigations', []);

        return view('my Investigations', compact('Investigation'));
    }
}

