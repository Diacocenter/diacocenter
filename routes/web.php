<?php

use App\Events\RegistrationEvent;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CooperationalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\v1\ArticleController;
use App\Http\Controllers\Web\v1\NewControllers;
use App\Http\Controllers\Web\v1\NewsLetterController;
use App\Http\Controllers\Web\v1\ProjectController;
use App\Http\Controllers\Web\v1\ProjectPhaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/jafar", function () {
    return view("auth.components.inters");
});

//Route::get("/jafar", function () {
//    return view("emails.contact-us.contact-us")->with("user", "Jafar")->with("projects", \App\Models\Project::limit(2)->inRandomOrder()->get());
//});

Route::get("/", [HomeController::class, "index"])->name("homepage");

Route::get("our-story", [HomeController::class, "ourStory"])->name("our-story");

//Services
Route::get("services", [HomeController::class, "services"])->name("services");

//articles
Route::resource("blog", ArticleController::class)->only("show")->parameters(["blog" => "article"]);

//news
Route::resource("news", NewControllers::class)->only(["index", "show"])->parameters(["news" => "new"]);

//contact us
Route::resource('contact-us', ContactUsController::class)->only("index", "store");

//faq
Route::get("/faq", [HomeController::class, "faq"])->name("faq");

//discover
Route::get("/discover", [HomeController::class, "discover"])->name("discover");

Route::resource('newsletter', NewsletterController::class)->only('store');

Route::get("asghar", function () {
//    dd("asghat");
//    $contact = \App\Models\ContactUs::where('last_name', "Asgarian")->first();
//    return \App\Mail\ContactUsMail::class($contact);
    return view('emails.contact-us.contact-us');
});

//projects
Route::apiResource("project", ProjectController::class)->only("show");

//blog news
Route::get("/blog-news", [HomeController::class, "blogNews"])->name("blog-news");

Route::get("/phase/{phase}", [ProjectPhaseController::class, "show"])->name("phase");

Route::get('/auth/google/redirect', [ProviderController::class, 'redirect'])->name("third-party.auth.redirect");
Route::get('/auth/google/callback', [ProviderController::class, 'callback'])->name("third-party.auth.callback");

// Authenticated Routes
Route::group(['middleware' => ['auth']], function () {

    Route::get("/choose-role", [HomeController::class, "chooseRole"])->name("choose-role");

    Route::post('/add-roles', [RoleController::class, "storeRole"])->name("roles");

    Route::get("/verify-email", [HomeController::class, "verifyEmail"])->name("verify-email");

    Route::get("/cooperational", [HomeController::class, "cooperational"])->name("cooperational");

    Route::post("cooperational-store", [CooperationalController::class, "store"])->name("cooperational-store");

    Route::post("verify-dispatch", [VerificationController::class, "resend"])->name("verify-dispatch");

    Route::post("submit_code", [VerificationController::class, "store"])->name("submit_code");
    //panel
    Route::any("/manager-panel/{path?}/{path2?}/{path3?}/{path4?}", [UserController::class, 'managerPanel'])->name("manager-panel");
    Route::middleware(['verified', "cooperational"])->group(function () {
        Route::any("/admin-panel/{path?}/{path2?}/{path3?}/{path4?}", [UserController::class, 'adminPanel'])->name("admin-panel");
        Route::any("/technology-seeker-panel/{path?}/{path2?}/{path3?}/{path4?}", [UserController::class, 'SeekerPanel'])->name("technology-seeker-panel");
        Route::any("/technology-provider-panel/{path?}/{path2?}/{path3?}/{path4?}", [UserController::class, 'ProviderPanel'])->name("technology-provider-panel");
        Route::any("/advisor-panel/{path?}/{path2?}/{path3?}/{path4?}", [UserController::class, 'advisorPanel'])->name("advisor-panel");
    });
});

Route::get('mails', function () {
    $user = App\Models\User::where("first_name", "=", "Mohammad")->first();
    RegistrationEvent::dispatch($user);
});


//Route::get('register', function () {
//   return redirect()->route('login')->with('register', true);
//})->name('register');
