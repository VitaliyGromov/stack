<?php

namespace App\Http\Requests\CookedDishes;

use Illuminate\Foundation\Http\FormRequest;

class CookedDishesFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['nullable', 'string'],
            'dish_id' => ['nullable', 'string'],
            'quantity' => ['nullable', 'string'],
        ];
    }
}
