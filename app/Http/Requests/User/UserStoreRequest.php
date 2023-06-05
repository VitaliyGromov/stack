<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:256'],
            'last_name' => ['required', 'string', 'max:256'],
            'surname' => ['required', 'string', 'max:256'],

            'email' => ['required', 'string', 'email', 'max:256'],
            'password' => [Password::default()],
        ];
    }

    public function messages(): array
    {
        return [
            //TODO заполнить
        ];
    }
}
