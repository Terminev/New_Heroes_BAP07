<?php


namespace App\Actions\Fortify;

use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewCompanies;
use Laravel\Jetstream\Jetstream;

class CreateNewCompany
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @param  array  $input
     * @return \App\Models\Company
     */

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create($input)
    {
        Validator::make($input, [
            'company_name' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
            'name_representing' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return Company::create([
            'company_name' => $input['company_name'],
            'siret' => $input['siret'],
            'email' => $input['email'],
            'name_representing' => $input['name_representing'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);
        return redirect('/login');
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

