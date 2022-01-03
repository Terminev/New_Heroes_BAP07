<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'localisation' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'integer', Rule::unique('users')->ignore($user->id)],
            'age' => ['nullable', 'integer'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'company_name' => ['nullable', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'siret' => ['nullable', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'number_employe' => ['nullable', 'integer'],
            'name_representing' => ['nullable', 'string', 'max:255'],
            'industry' => ['nullable', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'last_name' => $input['last_name'],
                'localisation' => $input['localisation'],
                'age' => $input['age'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'company_name' => $input['company_name'],
                'siret' => $input['siret'],
                'number_employe' => $input['number_employe'],
                'name_representing' => $input['name_representing'],
                'industry' => $input['industry'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'localisation' => $input['localisation'],
            'age' => $input['age'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'company_name' => $input['company_name'],
            'siret' => $input['siret'],
            'number_employe' => $input['number_employe'],
            'name_representing' => $input['name_representing'],
            'industry' => $input['industry'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
