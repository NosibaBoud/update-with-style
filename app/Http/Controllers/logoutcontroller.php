<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function destroy(){
        Auth::logout();
    
        return redirect('/home');
    }
}
