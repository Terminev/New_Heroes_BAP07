<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Validator::make($input, [
        //     'name' => ['string', 'max:255'],
        //     'last_name' => ['string', 'max:255'],
        //     'localisation' => ['string', 'max:255'],
        //     'phone' => [ 'string'],
        //     'age' => ['integer', 'max:100'],
        //     'email' => ['string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        //     'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted'] : '',
        //     'company_name'=>['string', 'max:255'],
        //     'siret'=>['string', 'max:14'],
        //     'number_employe' => ['integer'],
        //     'name_representing'=>['string', 'max:255'],
        //     'industry'=>['string'],
        // ])->validate();

        return User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'localisation' => $input['localisation'],
            'phone' => $input['phone'],
            'age' => $input['age'],
            'password' => Hash::make($input['password']),

            'company_name'=>$input['company_name'],
            'siret'=>$input['siret'],
            'number_employe' =>$input['number_employe'],
            'name_representing'=>$input['name_representing'],
            'industry'=>$input['industry'],
            'entreprise'=>$input['entreprise']
        ]);
        return redirect('/login');
    }
}


