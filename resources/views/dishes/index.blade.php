@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Название блюда</th>
                <th scope="col">Кнопки</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dishes as $dish)
                <tr>
                    <th scope="row">{{$dish->id}}</th>
                    <td>{{$dish->dish_name}}</td>
                    <td><a>Перейти</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <div>
            <x-modal-button modalId="createDish">
              {{__('Новое блюдо')}}
            </x-modal-button>
            <form action="#">
              <x-modal modalId="createDish" title="{{__('Новое блюдо')}}">
              
              </x-modal>
            </form>
          </div>
      </div>
</div>
@endsection