<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\investigationsearchcontroller;
use App\Http\Controllers\logoutcontroller;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\Usertestscontroller;
use App\Models\Investigation;
use App\Models\UserInvestigation;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/results', function () {
    return view('results');
    });
    Route::post('/makeappointment', function () {
        return view('make appointment');
        });

Route::get('/mytests',[Usertestscontroller::class,'show'])->name('mytests.show');

        Route::get('/testslist', function () {
            return view('tests list',[
                'tests'=>Investigation::all(),
               'tests' => Investigation::orderBy('created_at', 'asc')->simplepaginate(3)
        ]);
       
         });
Route::get('/test/{id}', function ($id) {
    $test = Investigation::find($id);
        return view('test',['test'=>$test]);
}); 
//Route::delete('/investigation/{investigation}/delete', [Usertestscontroller::class, 'delete']);
Route::post('/logout',[logoutcontroller::class,'destroy']);
Route::get('/search',[ testcontroller::class,'search']);
Route::group(['middleware' => ['auth']], function ()
 {
    Route::post('/add_test/{id}',[Usertestscontroller::class,'addMytest']);

});
    Route::post('/appointmen/next', function () {
        return view('appointment2');
        });
        Route::get('/nav', function () {
            return view('nav');
            });
        Route::get('/admindashboard', function () {
            return view('admindashboard.admindashboard');
            });
            Route::get('/investigations',[testcontroller::class,'index']);
            
               Route::get('/investigation/{id}', function ($id) {
                 $test = Investigation::find($id);
                return view('admindashboard.investigation',['test'=>$test]);   
                }); 
                //Route::get('/investigations/search', [testcontroller::class, 'investigationsearch']);
                Route::post('/investigation/create', [testcontroller::class, 'create']);
                Route::post('/investigations/store',[testcontroller::class,'store']);
                Route::post('/investigation/edit', [testController::class, 'edit']);
                Route::delete('/investigation/{id}', [Usertestscontroller::class, 'destroy'])->name('investigation.destroy');
Auth::routes();
 
//->middleware(['Auth','verified']);

//route::get('/register',[RegisterController::class,'create']);
//route::post('/register',[RegisterController::class,'store']);//post=requst
//route::get('/login',[LoginController::class,'create']);
//route::post('/login',[RegisterController::class,'store']);


