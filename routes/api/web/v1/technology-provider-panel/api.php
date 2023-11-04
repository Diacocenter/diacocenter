<?php

use App\Actions\Fortify\UpdateUserPassword;
use App\Http\Controllers\Web\v1\CountryController;
use App\Http\Controllers\Web\v1\ProviderPanel\DashboradController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderActivitiesController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderProjectController;
use App\Http\Controllers\Web\v1\ProviderPanel\ReduxController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderAgreementController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderCommunicationController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderDocumentController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderEducationController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderExperienceController;
use App\Http\Controllers\Web\v1\ProviderPanel\ProviderSocialMediaController;
use App\Http\Controllers\Web\v1\ProviderPanel\UserController;
use App\Http\Controllers\Web\v1\TemporaryFileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
//$user = User::where("email", "=", "asgarianm17@gmail.com")->first();
//    \Illuminate\Support\Facades\Auth::login($user);
//Auth::loginUsingId($user->id);
//Route::get("general-info",[ReduxController::class , "index"])->name("general-info");


Route::middleware('auth:sanctum')->name('api.web.v1.technology-provider-panel.')->group(function () {

    Route::prefix('account-info')->group(function () {

        Route::get("general-info", [ReduxController::class, "index"])->name("general-info");

        Route::get("activities", [ProviderActivitiesController::class, "index"])->name("activities");

        Route::get("project", [ProviderProjectController::class, "index"])->name('project');

        Route::get("all-project", [ProviderProjectController::class, "show"])->name('all.project');

        Route::put("change-password/{user:slug}", [UpdateUserPassword::class, "update"])->name("change-password");

        Route::apiResource("details", UserController::class)->only(['index', 'update']);

        Route::post("getSlug", [UserController::class, 'getSlug'])->name('getSlug');

        Route::apiResource("agreements", ProviderAgreementController::class)->only(['index', 'show', 'update']);

        Route::apiResource("social-address", ProviderSocialMediaController::class)->only(["index", "store", "update", "destroy"]);

        Route::apiResource("documents", ProviderDocumentController::class)->only(["index", "store", "destroy"]);

        Route::apiResource("experience", ProviderExperienceController::class)->only(["index", "store", "destroy"])->parameters(['experience' => 'userWorkExperience']);

        Route::apiResource("country", CountryController::class)->only(["index"]);

        Route::apiResource("education", ProviderEducationController::class)->only(["index", "store", "destroy"])->parameters(['education' => 'userEducation']);

        Route::apiResource("temporary-file", TemporaryFileController::class)->only(["store", "destroy"]);

        Route::apiResource("dashboard", DashboradController::class)->only("index");

    });

    Route::get("communication/role/{role}", [ProviderCommunicationController::class, "tabs"])->name("tabs");

    Route::apiResource("communication", ProviderCommunicationController::class)->only(["index", "show", "update", "store"]);

    Route::post("search", [ProviderCommunicationController::class, "search"])->name("search");

});
