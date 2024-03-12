<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('all-car',function(){
//     $cars=Car::all();
//     return view('car_list',compact('cars'));
// });
// Route::get('allcar',[CarController::class,'index']);

// Route::get('/car/{id}',[CarController::class,'show'])->name('car_detail');
Route::resource('cars', CarController::class);

Route::get('/myroute/{userId}/{name}',function($userId,$name){
    return "Your name is ".$name." and your ID is: ".$userId;
});

Route::get('/m2/{userId?}/{name?}',function($userId=1,$name="PNV"){
    return "Your name is ".$name." and your ID is: ".$userId;
});


