<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutcontroller;
use App\Http\Controllers\testcontroller;
use App\Models\mtest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/results', function () {
    return view('results');
    });
    Route::get('/ make appointment', function () {
        return view('make appointment');
        });
    Route::get('/my tests',[testcontroller::class,'show']); 
    
        Route::get('/tests list', function () {
            return view('tests list',[
                'tests'=>mtest::all(),
               'tests' => mtest::orderBy('created_at', 'asc')->simplepaginate(3)
        ]);
      
         });
Route::get('/test/{id}', function ($id) {
    $test=mtest::find($id);
        return view('test',['test'=>$test]);
}); 
Route::post('/logout',[logoutcontroller::class,'destroy']);
Route::get('/search',[ testcontroller::class,'search']);
Route::group(['middleware' => ['auth']], function ()
 {
Route::get('/add_test/{id}',[testcontroller::class,'addtest']);
});

Auth::routes();
 
//->middleware(['Auth','verified']);

//route::get('/register',[RegisterController::class,'create']);
//route::post('/register',[RegisterController::class,'store']);//post=requst
//route::get('/login',[LoginController::class,'create']);
//route::post('/login',[RegisterController::class,'store']);


