<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::apiResource("category", CategoryController::class);
Route::any("/video", [VideoController::class,'index'])->name("api.video");
Route::post("/login",[LoginController::class,'login'])->name("api.login");
Route::post("/users",[UserController::class,'showInfo'])->name("api.user.show");

