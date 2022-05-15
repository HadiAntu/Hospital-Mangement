<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/',[HomeController::class ,'index']);

Route::get('/home',[HomeController::class ,'redirect'])->middleware('auth','verified');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/x',[HomeController::class ,'x']);


/*admin*/
Route::get('/add-doctor',[AdminController::class ,'addDoctor']);
Route::post('/doctor-upload',[AdminController::class ,'upload']);
Route::get('/allappoinments',[AdminController::class ,'allappoinments']);
Route::get('/approveappoinment/{id}',[AdminController::class ,'approveappoinment']);
Route::get('/cancelappoinments/{id}',[AdminController::class ,'cancelappoinment']);
Route::get('/alldoctors',[AdminController::class ,'alldoctors']);
Route::get('/updatedoctor/{id}',[AdminController::class ,'updatedoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class ,'deletedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class ,'editdoctor']);
Route::post('/editdoctor/{id}',[AdminController::class ,'editdoctor']);
Route::get('/sendmail/{id}',[AdminController::class ,'sendmail']);
Route::post('/sending/{id}',[AdminController::class ,'sending']);




/*use*/
Route::post('/appoinment',[HomeController::class ,'appoinment']);
Route::get('/myappoinment',[HomeController::class ,'myappoinment']);
Route::get('/cancelappoinment/{id}',[HomeController::class ,'cancelappoinment']);