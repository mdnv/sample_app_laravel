<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AuthSignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|string|email|unique:users',
            //'password' => 'required|string|confirmed|min:8|max:20|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[~`!@#$%^&*()_\-+={}\[\];:\'"<>,.?\/\\|])[A-Za-z\d~`!@#$%^&*()_\-+={}\[\];:\'" <>,.?\/\\ |]{8,}$/'
            'password' => 'required|string|confirmed|min:8|max:20|regex:/^(?=.*[A-Za-z])(?=.*\d){8,}$/'
        ];
    }
}