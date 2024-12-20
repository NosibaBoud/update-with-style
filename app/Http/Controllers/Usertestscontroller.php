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
public function show()
{
  
  $userId = Auth::id();
         
  $test = UserInvestigation::where('user_id', $userId)->get();

return view('my tests',['tests' => $test]);
$totalPrice = collect($test)->sum('price'); // Sum up all prices

    return view('my tests', compact('test', 'totalPrice'));
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
