<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


//creo la prima rotta che fa riferimento al controller api
Route::get("/projects", [ProjectController::class, "index"]);
