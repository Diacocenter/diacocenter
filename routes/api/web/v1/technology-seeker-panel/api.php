<?php

use App\Http\Controllers\Web\v1\CountryController;
use App\Http\Controllers\Web\v1\SeekerPanel\DashboradController;
use App\Http\Controllers\Web\v1\SeekerPanel\ReduxController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerAgreementController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerCommunicationController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerDocumentController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerEducationController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerExperienceController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerProjectController;
use App\Http\Controllers\Web\v1\SeekerPanel\SeekerSocialMediaController;
use App\Http\Controllers\Web\v1\SeekerPanel\UserController;
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

Route::middleware('auth:sanctum')->name('api.web.v1.technology-seeker-panel.')->group(function () {

    Route::get("details", [UserController::class, "index"])->name("account-info.details");

    Route::put("details", [UserController::class, "update"])->name("account-info.details.update");

    Route::post("getSlug", [UserController::class,'getSlug'])->name('getSlug');

    Route::get("general-info",[ReduxController::class , "index"])->name("general-info");

    Route::apiResource("social-address", SeekerSocialMediaController::class)->only(["index", "store", "update", "destroy"]);

    Route::apiResource("document", SeekerDocumentController::class)->only(['index' , 'store' , 'destroy']);

    Route::apiResource("project", SeekerProjectController::class)->only(["index" , "show" , "store"]);

    Route::apiResource("education", SeekerEducationController::class)->only(["index","store","destroy"]);

    Route::apiResource("experience", SeekerExperienceController::class)->only(["index","store","destroy"]);

    Route::apiResource("agreement", SeekerAgreementController::class)->only(["index","store"]);

    Route::apiResource("communication", SeekerCommunicationController::class)->only(["index","show","update","store"]);

    Route::post("search", [SeekerCommunicationController::class, "search"])->name("search");

    Route::get("communication/role/{role}",[SeekerCommunicationController::class,"tabs"])->name("tabs");

    Route::apiResource("Dashboard", DashboradController::class)->only(["index"]);

    Route::apiResource("temporary-file", TemporaryFileController::class)->only(["store", "destroy"]);

    Route::apiResource("country", CountryController::class)->only(["index"]);

});
