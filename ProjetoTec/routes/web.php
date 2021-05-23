<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthRegisterController;
use App\Http\Controllers\SearchEnterpriseController;
use App\Http\Controllers\InController;

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


Route::resource('/', InController::class);
Route::resource('/auth', AuthController::class);
Route::resource('/register', RegisterController::class);
Route::resource('/home', GeneralController::class);
Route::get('/homeIndex', [GeneralController::class, 'index']);
Route::resource('/federations', FederationController::class);
Route::resource('/enterprises', EnterpriseController::class);
Route::resource('/generals', GeneralController::class);
Route::resource('/search', SearchController::class);
Route::resource('/in', AuthController::class);
Route::get('/searchEnterpriseHome', [SearchEnterpriseController::class, 'index']);
Route::get('/searchEnterprise', [SearchEnterpriseController::class, 'create']);

