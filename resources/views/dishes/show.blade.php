@php
    use App\Models\Product;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>{{$dish->dish_name}}</h2>
            <hr/>
            @if (sizeof($products) == 0)
                <div class="text-center">
                    <h3>{{__('Пока нет рецепта')}}</h3>
                    <div>
                        <x-modal-button modalId="createProductForDish">
                          {{__('Добавить продукт')}}
                        </x-modal-button>
                        <form action="{{route('dish_products.store', $dish->id)}}" method="POST">
                          @csrf
                          <x-modal modalId="createProductForDish" title="{{__('Добавить продукт')}}">
                            <x-product-select/>
                            <x-form-input inputName="quantity" inputType="number">
                                {{__('Количество')}}
                            </x-form-input>
                          </x-modal>
                        </form>
                      </div>
                </div>
            @else
            <h3>{{'Рецепт'}}</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">{{__('Название продукта')}}</th>
                    <th scope="col">{{__('Количество')}}</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product['product_name']}}</th>
                        <td>{{$product['pivot']['quantity']}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <div>
                <x-modal-button modalId="createProductForDish">
                  {{__('Добавить продукт')}}
                </x-modal-button>
                <form action="{{route('dish_products.store', $dish->id)}}" method="POST">
                  @csrf
                  <x-modal modalId="createProductForDish" title="{{__('Добавить продукт')}}">
                    <x-product-select/>
                    <x-form-input inputName="quantity" inputType="number">
                        {{__('Количество')}}
                    </x-form-input>
                  </x-modal>
                </form>
              </div>
            @endif
        </div>
    </div>
@endsection