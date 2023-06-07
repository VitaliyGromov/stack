<?php

namespace App\Http\Requests\Dish;

use Illuminate\Foundation\Http\FormRequest;

class DishFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dish_name' => ['required', 'string', 'max:256'],
        ];
    }

    public function messages(): array
    {
        return [
            'dish_name.required' => 'Это поле обязательно для заполнения',
            'dish_name.string' => 'Поле должно быть строкой',
            'dish_name.max:256' => 'Количество символов не должно превышать 256',
        ];
    }
}
