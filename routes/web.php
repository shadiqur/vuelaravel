<?php

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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('message',function(){

    return['laravel','vue','php','oo its ok'];
});

Route::post('meg',function(Request $request){

    return view('home');
});
Route::get('homepage',function(){

    return view('home');
});
