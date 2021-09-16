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
});
Route::get('/AdminView',[App\Http\Controllers\UserController::class,'AdminView']);
Route::get('/UserView',[App\Http\Controllers\UserController::class,'UserView']);
Route::post('/UserView',[App\Http\Controllers\UserController::class,'Takee']);

Route::get('/UserView/Update/{id}',[App\Http\Controllers\UserController::class,'edit']);
Route::post('/UserView/Update/{id}',[App\Http\Controllers\UserController::class,'update']);

Route::get('/UserView/Delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

