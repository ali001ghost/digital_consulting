<?php

use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\ExperinceController;
use App\Models\Experince;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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


Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [AuthController::class, 'logout']);

});
  Route::post('user', [UserController::class, 'store']);
  Route::post('consulting', [ConsultingController::class, 'store']);
  Route::post('experince', [ExperinceController::class, 'store']);
