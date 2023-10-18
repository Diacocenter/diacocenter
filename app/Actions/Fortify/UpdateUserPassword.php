<?php

namespace App\Actions\Fortify;

use App\Events\ChangePasswordEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, Request $request): void
    {
        $input = $request->input();
        Validator::make($input, [
            'current_password' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->after(function ($validator) use ($user, $input) {
            if (! isset($input['current_password']) || ! Hash::check($input['current_password'], $user->password)) {
                $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
            }
        })->validateWithBag('updatePassword');

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
        ChangePasswordEvent::dispatch($user);

//        Validator::make($input, [
//            'current_password' => ['required', 'string', 'current_password:web'],
//            'password' => $this->passwordRules(),
//        ], [
//            'current_password.current_password' => __('The provided password does not match your current password.'),
//        ])->validateWithBag('updatePassword');
//
//        $user->forceFill([
//            'password' => Hash::make($input['password']),
//        ])->save();
    }
}