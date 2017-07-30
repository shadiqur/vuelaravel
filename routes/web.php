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
   // $input = $request->all();
   // DB::table('tolist')->insert($input);
    //$name = $request->input('fname');
    $data = $request->json()->all();
    //return view('home');
    return   $data;
});
Route::get('homepage',function(){

    return view('home');
});
