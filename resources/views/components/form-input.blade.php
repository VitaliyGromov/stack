@props(['inputName' => '', 'inputType' => 'text'])

<div class="form-group mb-3">
    <label for="{{$inputName}}">{{$slot}}</label>
    <input type="{{$inputType}}" name="{{$inputName}}" {{$attributes}} class="form-control">
    <x-error name="{{$inputName}}"/>
  </div>