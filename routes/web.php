<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\libraryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/adminindex',[libraryController::class,'adminindex']);

Route::get('/login',[libraryController::class,'login']);
Route::post('/loginaction',[libraryController::class,'loginaction']);
 Route::get('/admindashboard',[libraryController::class,'admindashboard']);
 Route::get('/addbook',[libraryController::class,'addbook']);
 Route::post('/bookinsert',[libraryController::class,'bookinsert']);
 Route::get('/viewbook',[libraryController::class,'viewbook']);
Route::get('/edit/{id}',[libraryController::class,'edit']);
Route::post('/editaction/{id}',[libraryController::class,'editaction']);
Route::get('/delete/{id}',[libraryController::class,'delete']);

Route::get('/studentindex',[libraryController::class,'studentindex']); 
Route::get('/registerstudent',[libraryController::class,'registerstudent']);
Route::post('/studentinsert',[libraryController::class,'studentinsert']);
Route::get('/slogin',[libraryController::class,'slogin']);
Route::post('/sloginaction',[libraryController::class,'sloginaction']);
Route::get('/studentdashboard',[libraryController::class,'studentdashboard']);
Route::get('/viewstudent',[libraryController::class,'viewstudent']);
Route::get('/sedit/{id}',[libraryController::class,'sedit']);
Route::post('/seditaction/{id}',[libraryController::class,'seditaction']);
Route::get('/sdelete/{id}',[libraryController::class,'sdelete']);
Route::get('/issuebook',[libraryController::class,'issuebook']);
Route::post('/issuebookinsert',[libraryController::class,'issuebookinsert']);
Route::get('/viewissue',[libraryController::class,'viewissue']); 
Route::get('/return/{id}',[libraryController::class,'return']); 
Route::get('/reissue/{id}',[libraryController::class,'reissue']);
Route::post('/reissueaction/{id}',[libraryController::class,'reissueaction']);
Route::get('/studentlogout',[libraryController::class,'studentlogout']);
Route::get('/viewadminbookdtls',[libraryController::class,'viewadminbookdtls']);
Route::get('/adminlogout',[libraryController::class,'adminlogout']);  
    

