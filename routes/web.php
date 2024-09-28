<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutcontroller;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\Usertestscontroller;
use App\Models\Investigation;
use App\Models\UserInvestigation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/results', function () {
    return view('results');
    });
    Route::post('/make appointment', function () {
        return view('make appointment');
        });
//Route::post('/my tests/{id}',[Usertestscontroller::class,'store'])->name('mytest.store'); 
Route::get('/my tests',[Usertestscontroller::class,'show'])->name('mytests.show');; 

        Route::get('/tests list', function () {
            return view('tests list',[
                'tests'=>Investigation::all(),
               'tests' => Investigation::orderBy('created_at', 'asc')->simplepaginate(3)
        ]);
       
         });
Route::get('/test/{id}', function ($id) {
    $test = Investigation::find($id);
        return view('test',['test'=>$test]);
}); 
Route::delete('/investigation/{investigation}/delete', [Usertestscontroller::class, 'delete']);
Route::post('/logout',[logoutcontroller::class,'destroy']);
Route::get('/search',[ testcontroller::class,'search']);
Route::group(['middleware' => ['auth']], function ()
 {
    Route::post('/add_test/{id}',[Usertestscontroller::class,'addMytest']);

});
    Route::post('/next', function () {
        return view('appointment2');
        });
Auth::routes();
 
//->middleware(['Auth','verified']);

//route::get('/register',[RegisterController::class,'create']);
//route::post('/register',[RegisterController::class,'store']);//post=requst
//route::get('/login',[LoginController::class,'create']);
//route::post('/login',[RegisterController::class,'store']);


