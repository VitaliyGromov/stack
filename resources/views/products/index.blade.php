@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <form action="{{route('products')}}" method="GET">
        <div class="input-group mb-3">
          <input type="number" name="id" class="form-control me-3" placeholder="{{__('id продукта')}}">
          <input type="text" name="product_name" class="form-control me-3" placeholder="{{__('Название продукта')}}">
          <input type="text" name="quantity" class="form-control me-3" placeholder="{{__('Количество')}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">{{__('Найти')}}</button>
          </div>
        </div>
      </form>
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
        <div class="row">
          <div class="col-12">
            <x-modal-button modalId="createProduct">
              {{__('Новый продукт')}}
            </x-modal-button>

            <x-modal-button modalId="totalProducts">
              {{__('Итоги по продуктам')}}
            </x-modal-button>
          </div>
        </div>
          <div>
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
            <x-modal modalId="totalProducts" title="{{__('Итоги по продуктам')}}">
              @livewire('total-products')
            </x-modal>
          </div>
    </div>
</div>
@endsection