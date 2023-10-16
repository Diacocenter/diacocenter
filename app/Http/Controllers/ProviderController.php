<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect()
    {
        return Socialite::driver("google")->scopes(['openid'])->redirect();
    }

    /**
     * @param $provider
     *
     * @return Application|RedirectResponse|Redirector|null
     */
    public function callback()
    {
        $socialiteUser = Socialite::driver("google")->user();

        $user = User::updateOrCreate([
            'email'    => $socialiteUser->user['email'],
        ], [
            'first_name'             => $socialiteUser->user['given_name'],
            'last_name'             => $socialiteUser->user['family_name'],
            'provider'          => "google",
            'remember_token'    => $socialiteUser->token,
            'email_verified_at' => Carbon::now(),
        ]);

        Auth::login($user);

        return redirect("/login");
    }
}
