<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin'],function(){

});