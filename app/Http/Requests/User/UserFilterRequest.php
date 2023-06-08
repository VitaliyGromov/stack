<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'last_name' => ['nullable', 'string'],
            'surname' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'role_name' => ['nullable', 'string'],
        ];
    }
}
