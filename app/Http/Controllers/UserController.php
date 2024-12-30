<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('superadmin.manageadmins', compact('users'));;
    }
    public function create(){
        return view('superadmin.addadmin');
    }
    public function store(Request $request){
       $data=new User ;
            $data->name = $request->input('name');
            $data->email = $request->input('email');
            $data->phone_number = $request->input('phone_number');
            $data->password = $request->input('password');
            $data->role=$request->input('role');
        $data->save();
        return redirect()->route('admin.show');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:15',
        ]);

        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect(view('superadmin.manageadmins',compact('users')))->back()->with('success', 'User updated successfully!');
    }
    public function delete($id){
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'admin deleted successfully!');
        }
    }
}
