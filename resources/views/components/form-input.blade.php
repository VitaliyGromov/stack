@props(['inputName' => '', 'inputType' => 'text', 'inputValue' => ''])

<div class="form-group mb-3">
    <label for="{{$inputName}}">{{$slot}}</label>
    <input type="{{$inputType}}" name="{{$inputName}}" value="{{$inputValue}}" class="form-control">
    <x-error name="{{$inputName}}"/>
</div>