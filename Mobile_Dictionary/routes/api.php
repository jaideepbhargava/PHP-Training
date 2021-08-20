<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserInfoController;

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

Route::get('/users',[UserInfoController::class,'getAllContacts']);
Route::post('/user',[UserInfoController::class,'addContact']);
Route::get('/user/byNumber',[UserInfoController::class,'getContactByNumber']);
Route::get('/user/byName',[UserInfoController::class,'getContactByName']);
Route::get('/user/byEmail',[UserInfoController::class,'getContactByEmail']);
Route::delete('/user/byNumber',[UserInfoController::class,'removeContactByMobileNumber']);
Route::delete('/user/byName',[UserInfoController::class,'removeContactByName']);
Route::delete('/user/byEmail',[UserInfoController::class,'removeContactByEmail']);


