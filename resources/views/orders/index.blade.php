@php
    use App\Models\Product;
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if (sizeof($orders) == 0)
          <h2>{{__('Пока не создали ни одного заказа')}}</h2>
      @else
        <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('id')}}</th>
              <th scope="col">{{__('Название продукта')}}</th>
              <th scope="col">{{__('Количество')}}</th>
              <th scope="col">{{__('Цена')}}</th>
              <th scope="col">{{__('Дата создания заказа')}}</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($orders as $order)
              <tr>
                  <th scope="row">{{$order->id}}</th>
                  <td>{{Product::getProductNameById($order->product_id)}}</td>
                  <td>{{$order->quantity}}</td>
                  <td>{{$order->price}}</td>
                  <td>{{$order->order_date}}</td>
                  <td><a>Перейти</a></td>
                </tr>
              @endforeach
          </tbody>
        </table>
      @endif
          <div>
            <x-modal-button modalId="createOrder">
              {{__('Новый заказ')}}
            </x-modal-button>
            <form action="{{ route('orders.store') }}" method="POST">
              @csrf
              <x-modal modalId="createOrder" title="{{__('Новый заказ продукта')}}">
                <x-product-select/>

                <x-form-input inputName="quantity" inputType="number">
                  {{__('Количество')}}
                </x-form-input>

                <x-form-input inputName="price" inputType="number">
                    {{__('Цена в руб.')}}
                </x-form-input>

                <x-form-input inputName="order_date" inputType="date">
                    {{__('Дата заказа')}}
                </x-form-input>

              </x-modal>
            </form>
          </div>
    </div>
</div>
@endsection