@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('users')}}" method="GET">
          <div class="mb-3">
            <input type="text" name="id" class="form-control mb-3" placeholder="{{__('id пользователя')}}">
            <input type="text" name="name" class="form-control mb-3" placeholder="{{__('Имя')}}">
            <input type="text" name="last_name" class="form-control mb-3" placeholder="{{__('Фамилия')}}">
            <input type="text" name="surname" class="form-control mb-3" placeholder="{{__('Отчество')}}">
            <input type="text" name="email" class="form-control mb-3" placeholder="{{__('Email')}}">
            <div class="mb-3">
              <x-role-select/>
            </div>
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">{{__('Найти')}}</button>
            </div>
          </div>
        </form>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">{{__('id')}}</th>
                <th scope="col">{{__('Имя')}}</th>
                <th scope="col">{{__('Фамилия')}}</th>
                <th scope="col">{{__('Отчество')}}</th>
                <th scope="col">{{__('email')}}</th>
                <th scope="col">{{__('Роль')}}</th>
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
                    <td>{{$user->getRoleNames()[0]}}</td>
                    <td>
                      <form action="{{route('users.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{__('Удалить')}}</button>
                      </form>
                    </td>
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

                <div class="form-group mb-3">
                  <label for="role_name">{{__('Роль')}}</label>
                  <x-role-select/>
                </div>
              
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