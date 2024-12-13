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
        $data->save();
        return redirect()->route('admin.show');


    }
}
