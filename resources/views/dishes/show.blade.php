@php
    use App\Models\Product;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
              <h2>{{$dish->dish_name}}</h2>
              <form action="{{ route('dish.destroy', $dish->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-3">{{__('Удалить')}}</button>
              </form>
            </div>
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
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{$product['product_name']}}</td>
                        <td>{{$product['pivot']['quantity']}}</td>
                        <td>
                          <form action="{{route('dish_products.destroy', $dish->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="product_id" value="{{$product['id']}}"/>
                            <button type="submit" class="btn btn-danger">{{'Удалить'}}</button>
                          </form>
                        </td>
                        <td><div>
                          <x-modal-button modalId="updateProductForDish">
                            {{__('Редактировать продукт')}}
                          </x-modal-button>
                          <form action="{{route('dish_products.update', $dish->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-modal modalId="updateProductForDish" title="{{__('Редактировать продукт')}}">
                              <x-product-select selectedProduct="{{$product['id']}}"/>
                              <x-form-input inputName="quantity" inputType="number" inputValue="{{$product['pivot']['quantity']}}">
                                  {{__('Количество')}}
                              </x-form-input>
                            </x-modal>
                          </form>
                        </div></td>
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
              <div class="mt-3">
                  <x-modal-button modalId="editDish">
                    {{__('Редактировать блюдо')}}
                  </x-modal-button>
                  <form action="{{route('dish.update', $dish->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-modal modalId="editDish" title="{{__('Редактировать блюдо')}}">
                      <x-form-input inputName="dish_name" inputValue="{{$dish->dish_name}}">
                        {{__('название блюда')}}
                      </x-form-input>
                    </x-modal>
                  </form>
              </div>
            @endif
        </div>
    </div>
@endsection