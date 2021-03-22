<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RequirementController;
//use App\Http\Controllers\RequiredController;
//use App\Http\Controllers\CompanieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('add',[CompanyController::class,'add']);
//Route::post('add',[RequiredController::class,'add']);
//Route::post('addCourse',[CourseController::class,'addCourse']);
Route::get('list',[CompanyController::class,'list']);
Route::delete('delete/{id}',[CompanyController::class,'delete']);
Route::get('Company/{id}',[CompanyController::class,'getCompany']);
Route::put('updateCompany/{id}',[CompanyController::class,'updateCompany']);

//Route::post('addreq',[RequirementController::class,'addreq']);


