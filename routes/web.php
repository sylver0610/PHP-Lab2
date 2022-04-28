<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
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
});

/*Route::prefix('customer')->name('customer.')->group(function(){
    Route::get('/',[CustomerController::class,'findCus']) ->name('find');
    Route::get('/',[CustomerController::class,'showAll'])->name('CustomerView');


});*/

//Route::get('/customer/find',[CustomerController::class,'findCus'])->name('find');
Route::get('/customer',[CustomerController::class,'showAll'])->name('CustomerView');


Route::get('/customer/{id}',[CustomerController::class,'show'])->name('oneCustomer');