<?php

use App\Http\Controllers\MovieController;
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
    return view('child.index');
});

Route::get('movie',[MovieController::class, 'movielist']);

// Route::get('movie/{mName}',function($mName){
//     if($mName == null){
//         return view('movie');
//     }
//     else{
//       return view('movie',['mName'=>$mName]);
//     }
//     // return $mName;

// });

Route::get('login',function(){
    return view('child.login');
});

Route::get('admin',function(){
    return view('child.admin');
});

Route::get('bootstrap',function(){
    return view('child.bootstrapRevision');
});

