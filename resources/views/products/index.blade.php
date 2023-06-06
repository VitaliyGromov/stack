@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if (sizeof($products) == 0)
          <h2>{{__('Пока не добавили ни одного продукта')}}</h2>
      @else
        <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('id')}}</th>
              <th scope="col">{{__('Название продукта')}}</th>
              <th scope="col">{{__('Количество')}}</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $product)
              <tr>
                  <th scope="row">{{$product->id}}</th>
                  <td>{{$product->product_name}}</td>
                  <td>{{$product->quantity}}</td>
                  <td><a>Перейти</a></td>
                </tr>
              @endforeach
          </tbody>
        </table>
      @endif
          <div>
            <x-modal-button modalId="createProduct">
              {{__('Новый продукт')}}
            </x-modal-button>
            <form action="{{route('products.store')}}" method="POST">
              @csrf
              <x-modal modalId="createProduct" title="{{__('Новый продукт')}}">
                <x-form-input inputName="product_name">
                  {{__('Название продукта')}}
                </x-form-input>
                <x-form-input inputName="quantity" inputType="number">
                  {{__('Количество')}}
                </x-form-input>
              </x-modal>
            </form>
          </div>
    </div>
</div>
@endsection