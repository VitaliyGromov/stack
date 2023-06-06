<?php

namespace App\Http\Requests\CookedDishes;

use Illuminate\Foundation\Http\FormRequest;

class CookedDishesStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dish_id' => ['required'],
            'quantity' => ['required', 'integer', 'max:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'quantity.required' => 'Зполните',
            'quantity.max:10' => 'Должно быть не больше 10',
        ];
    }
}
