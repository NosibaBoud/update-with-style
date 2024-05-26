<?php

use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test',[postcontroller::class, 'index'])->name('post.index');
Route::post('test/post/create',[postcontroller::class, 'store'])->name('post.store');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
