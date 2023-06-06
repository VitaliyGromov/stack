<?php

namespace App\Http\Requests\DishProducts;

use Illuminate\Foundation\Http\FormRequest;

class DishProductsStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer'],
            'quantity' => ['required', 'integer', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'quantity.required' => 'Заполните это поле',
            'quantity.max:1000' => 'Не может быть больше 1000', 
        ];
    }
}
