<?php

use App\Http\Controllers\OpenApiController;
use App\Http\Controllers\Web\v1\TemporaryFileController;
use App\Models\TemporaryFile;
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
Route::middleware("auth:sanctum")->name("api.public.")->group(function () {
});
