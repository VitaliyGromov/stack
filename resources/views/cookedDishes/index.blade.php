@php
    use App\Models\Dish;
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if (sizeof($cookedDishes) == 0)
        <div class="text-center">
            <h2>{{__('Пока не приготовили ни одного блюда')}}</h2>
            <div>
                <x-modal-button modalId="cookDish">
                  {{__('Добавить блюдо')}}
                </x-modal-button>
                <form action="{{ route('cooked_dishes.store') }}" method="POST">
                  @csrf
                  <x-modal modalId="cookDish" title="{{__('Новое блюдо')}}">
                    <x-dish-select/>

                    <x-form-input inputName="quantity">
                      {{__('Количество')}}
                    </x-form-input>
                    
                  </x-modal>
                </form>
              </div>
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
        <div>
          <x-modal-button modalId="cookDish">
            {{__('Добавить блюдо')}}
          </x-modal-button>
          <form action="{{route('cooked_dishes.store') }}" method="POST">
            @csrf
            <x-modal modalId="cookDish" title="{{__('Новое блюдо')}}">
              <x-dish-select/>

              <x-form-input inputName="quantity">
                {{__('Количество')}}
              </x-form-input>
              
            </x-modal>
          </form>
        </div>
      @endif
      </div>
</div>
@endsection