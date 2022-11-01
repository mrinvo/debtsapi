<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('admin');

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['admin'])->name('dashboard');



Route::prefix('/dashboard')->name('admin.')->group(function (){


    Route::middleware('admin')->group(function () {


    });
    require __DIR__.'/admin_auth.php';

});


//  require __DIR__.'/auth.php';
