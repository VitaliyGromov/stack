@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <form action="{{route('dishes')}}" method="GET">
        <div class="input-group mb-3">
          <input type="text" name="dish_name" class="form-control me-3" placeholder="{{__('Название блюда')}}">
          <input type="text" name="id" class="form-control me-3" placeholder="{{__('id блюда')}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">{{__('Найти')}}</button>
          </div>
        </div>
      </form>
      @if (sizeof($dishes) == 0)
          <h2>{{__('Пока не добавили ни одного блюда')}}</h2>
      @else
        <x-table>
          <thead>
            <tr>
              <th scope="col">{{__('id')}}</th>
              <th scope="col">{{__('Название блюда')}}</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($dishes as $dish)
              <tr>
                  <th scope="row">{{$dish->id}}</th>
                  <td>{{$dish->dish_name}}</td>
                  <td><a href="{{route('dishes.show', $dish->id)}}">Перейти</a></td>
                </tr>
              @endforeach
          </tbody>
        </x-table>
      @endif
        <div class="row">
          <div class="col-12">
            <x-modal-button modalId="createDish">
              {{__('Новое блюдо')}}
            </x-modal-button>

            <x-modal-button modalId="totalDishes">
              {{__('Итоги')}}
            </x-modal-button>
          </div>
        </div>
          <div class="btn-group">
            <form action="{{route('dish.store')}}" method="POST">
              @csrf
              <x-modal modalId="createDish" title="{{__('Новое блюдо')}}">
                <x-form-input inputName="dish_name">
                  {{__('название блюда')}}
                </x-form-input>
              </x-modal>
            </form>
              <x-modal modalId="totalDishes" title="{{__('Итоги по блюдам')}}">
                @livewire('total-dishes')
              </x-modal>
          </div>
      </div>
</div>
@endsection