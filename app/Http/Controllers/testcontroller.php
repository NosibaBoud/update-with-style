<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Investigation;

class testcontroller extends Controller
{

    public function index(){
        $tests=Investigation::all();
           $tests = Investigation::orderBy('created_at', 'asc')->simplepaginate(3);
           return view('admindashboard.investigations',compact('tests'));
    }
    public function create()
{
    return view('admindashboard.createinvestigation');
}
public function edit()
{
    return view('admindashboard.editinvestigation');
}


    public function search()
    {
        $search_text=$_GET['search'];
        $tests=Investigation::where('name','like','%'.$search_text.'%')->get();
        return view('search',compact('tests'));

    }
    public function show($id)
    {
        $test = Investigation::find($id);

    
    
        return view('admindashboard.investigation', compact('test'));;
    }
    //public function investigationsearch()
    //{
       // $search_text=$_GET['query'];
       // $investigations=Investigation::where('name','like','%'.$search_text.'%')->get();
       // return view('admindashboard.investigationsearch',compact('investigations'));

    //}
    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:1000'],
            'details' => ['required', 'string', 'min:3', 'max:1000'],
            'price' => ['required', 'numeric'],
            'expected_time_for_test' => ['required', 'string', 'min:3', 'max:1000'],
            'status' => ['required', 'string', 'min:3', 'max:1000'],
            'can_taken' => ['required', 'boolean'],
        ]);
        $investigation = Investigation::create([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'expected_time_for_test' => $request->expected_time_for_test,
            'instructions' => $request->instructions,
            'status' => $request->status,
            'can_taken' => $request->can_taken,
            
        ]);
        return redirect()->route('investigations.show', ['id' => $investigation->id]);

    }
   
    public function checkName(Request $request)
    {
    
        return view('admindashboard.investigations', compact('nameExists'));
    }

}

