<?php

namespace App\Http\Requests\Account\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->hasRole('admin')) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'  => ['required', 'string'],
            'last_name'   => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'birthdate'   => ['nullable', 'date'],
            'username'    => ['required', 'unique:accounts,username'],
            'password'    => ['required', 'confirmed'],
        ];
    }
}
