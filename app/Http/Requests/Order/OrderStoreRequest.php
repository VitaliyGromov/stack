<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'quantity' => ['required', 'integer', 'max:10000'],
            'price' => ['required', 'integer', 'max:10000'],
            'product_id' => ['required', 'integer'],
            'order_date' => ['required', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'quantity.required' => 'Это поле обязательно для заполнения',
            'quantity.max:10000' => 'Количество не может быть больше 10000',

            'price.required' => 'Это поле обязательно для заполнения',
            'price.max:10000' => 'Цена не может быть больше 10000',

            'order_date.required' => 'Это поле обязательно для заполнения',
            'order_date.date' => 'Укажите верную дату',
        ];
    }
}
