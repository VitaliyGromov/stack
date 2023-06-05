@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Название продукта</th>
                <th scope="col">Количество</th>
                <th scope="col">Кнопки</th>
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
    </div>
</div>
@endsection