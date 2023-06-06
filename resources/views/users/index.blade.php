@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Отчество</th>
                <th scope="col">email</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    @if (!is_null($user->surname))
                      <td>{{$user->surname}}</td>
                    @else
                        <td>-</td>
                    @endif
                    <td>{{$user->email}}</td>
                    <td><a>Перейти</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <div>
            <x-modal-button modalId="createUser">
              {{__('Добавить пользователя')}}
            </x-modal-button>
            <form action="{{route('users.store')}}" method="POST">
              @csrf
              <x-modal modalId="createUser" title="{{__('Добавить пользователя')}}">
                <x-form-input inputName="name">
                  {{__('Имя')}}
                </x-form-input>
              
                <x-form-input inputName="last_name">
                  {{__('Фамилия')}}
                </x-form-input>
              
                <x-form-input inputName="surname">
                  {{__('Отчество')}}
                </x-form-input>
              
                <x-form-input inputName="email" inputType="email">
                  {{__('Email')}}
                </x-form-input>
              
                <x-form-input inputName="password" inputType="password">
                  {{__('Пароль')}}
                </x-form-input>
              </x-modal>
            </form>
          </div>
    </div>
</div>
@endsection