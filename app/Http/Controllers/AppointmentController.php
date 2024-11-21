<?php

namespace App\Http\Controllers;

use App\Models\HomeAppointment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string','min:3', 'max:15'],
            'last_name' => ['required', 'string','min:3', 'max:15'],
            'phone_number'=>['required','max:10','min:10','string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'age' => ['required', 'integer','min:1', 'max:3'],
            'gender'=> ['required', 'boolean'],
            'time'=>['required'],
            'date'=>['required'],
            'address' => ['required', 'string','min:10', 'max:255'],
        ]);
    }
    protected function create(array $data)
    {
        return HomeAppointment::create([
            'first_name' => $data['first_name'],
            'last_name'=>$data['last_name'],
            'phone_number'=>$data['phone_number'],
            'email'=>$data['email'],
            'age'=>$data['age'],
            'gender'=>$data['gender'],
            'time'=>$data['time'],
            'date'=>$data['date'],
            'address'=>$data['address'],
        
        ]);
    }
}
