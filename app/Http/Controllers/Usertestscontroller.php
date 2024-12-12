<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use App\Models\UserInvestigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Usertestscontroller extends Controller
{
  public function addMytest($id)
  {
      $userId = Auth::id();
  
      UserInvestigation::create([
     'investigation_id' => $id,
      'user_id' => $userId,
  ]);
  return redirect()->back();
}
public function show(Request $request)
{
  
  $userId = Auth::id();
         
  $test = UserInvestigation::where('user_id', $userId)->get();
 
 // $test = mytests::all();
 // $userId = Auth::id();

return view('my tests',['tests' => $test]);
}
public function delete(Investigation $investigation){
  $this->authorize('delete', $investigation);

  $investigation->likes()->delete();

  $investigation->delete();

  return redirect()->back();
}
public function destroy($id)
    {
        // Find the item by ID and delete it
        $tests = Investigation::find($id);
        $tests->delete();

        // Redirect back with a success message
        return view('my tests')->with('success', 'Item deleted successfully!');
    }
}
