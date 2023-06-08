@php
    use App\Models\Dish;
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <form action="{{route('cooked_dishes')}}" method="GET">
        <div class="mb-3">
          <x-dish-select/>
          <input type="number" name="id" class="form-control mb-3" placeholder="{{__('id записи')}}">
          <input type="number" name="quantity" class="form-control mb-3" placeholder="{{__('Количество')}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">{{__('Найти')}}</button>
          </div>
        </div>
      </form>
      @if (sizeof($cookedDishes) == 0)
        <div class="text-center">
            <h2>{{__('Пока не приготовили ни одного блюда')}}</h2>
        </div>
      @else
        <table class="table">
          <thead>
            <tr>
              <th scope="col">{{__('id')}}</th>
              <th scope="col">{{__('Название блюда')}}</th>
              <th scope="col">{{__('Количество')}}</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($cookedDishes as $cookedDish)
              <tr>
                  <th scope="row">{{$cookedDish->id}}</th>
                  <td>{{Dish::getDishNameById($cookedDish->dish_id)}}</td>
                  <td>{{$cookedDish->quantity}}</td>
                  <td></td>
                  <td></td>
                </tr>
              @endforeach
          </tbody>
        </table>
      @endif
      <div class="row">
        <div class="col-12">
          <x-modal-button modalId="cookDish">
            {{__('Добавить блюдо')}}
          </x-modal-button>

          <x-modal-button modalId="totalCookedDishes">
            {{__('Отчет по готовым блюдам')}}
          </x-modal-button>
        </div>
      </div>
      <div>
        <form action="{{route('cooked_dishes.store') }}" method="POST">
          @csrf
          <x-modal modalId="cookDish" title="{{__('Новое блюдо')}}">
            <x-dish-select/>

            <x-form-input inputName="quantity">
              {{__('Количество')}}
            </x-form-input>
            
          </x-modal>
        </form>
        <x-modal modalId="totalCookedDishes">
          @livewire('total-cooked-dishes')
        </x-modal>
      </div>
    </div>
</div>
@endsection