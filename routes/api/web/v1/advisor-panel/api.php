<?php

use App\Http\Controllers\Web\v1\AdvisorPanel\AdvisorDocumentController;
use App\Http\Controllers\Web\v1\AdvisorPanel\AdvisorEducationController;
use App\Http\Controllers\Web\v1\AdvisorPanel\AdvisorEXperienceController;
use App\Http\Controllers\Web\v1\AdvisorPanel\AdvisorSocialMediaController;
use App\Http\Controllers\Web\v1\AdvisorPanel\UserController;
use App\Http\Controllers\Web\v1\CountryController;
use App\Http\Controllers\Web\v1\TemporaryFileController;
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

Route::middleware('auth:sanctum')->name('api.web.v1.advisor-panel.')->group(function () {
    Route::get("details", [UserController::class, "index"])->name("account-info.details");

    Route::put("details", [UserController::class, "update"])->name("account-info.details.update");

    Route::apiResource("temporary-file", TemporaryFileController::class)->only(["store", "destroy"]);

    Route::apiResource("social-address", AdvisorSocialMediaController::class)->only(["index", "store", "update", "destroy"]);

    Route::apiResource("document", AdvisorDocumentController::class)->only(['index' , 'store' , 'destroy']);

    Route::apiResource("education", AdvisorEducationController::class)->only(["index","store","destroy"]);

    Route::apiResource("experience", AdvisorEXperienceController::class)->only(["index","store","destroy"]);

    Route::apiResource("country", CountryController::class)->only(["index"]);

});
