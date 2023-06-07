@props(['selectedProduct' => ''])

<div class="form-group mb-3">
    <label for="product_id">{{__('Продукт')}}</label>
    <select name="product_id" class="form-control">
        @foreach ($products as $product)
            <option value="{{$product->id}}" @if ($selectedProduct == $product->id) selected @endif>{{$product->product_name}}</option>
        @endforeach
    </select>
    <x-error name="product_id"/>
</div>