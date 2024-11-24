<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required', 'string', 'max:256'
            ],

            'firstname' => [
                'required', 'string', 'max:256'
            ],

            'email' => [
                'required', 'email'
            ],

            'password' => [
                'required', 'min:4',
            ],

            'confirm_password' => [
                'required', 'min:4',
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'email' => strtolower($this->email)
        ]);
    }
}
