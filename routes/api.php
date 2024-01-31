<?php

use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\HouseController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API SEARCH
Route::get("/houses/search", [HouseController::class, "search"]);

// API VIEWS
Route::post("/houses/views", [HouseController::class, "views"]);
Route::get("/houses/views", [HouseController::class, "showViews"]);
Route::get("/houses/views/chart", [HouseController::class, "getViews"]);


// API HOUSES
Route::apiResource("/houses", HouseController::class);

// API SERVICE
Route::apiResource("/services", ServiceController::class);

// API MESSAGE
Route::post("/messages", [MessageController::class, 'store']);
