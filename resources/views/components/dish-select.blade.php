<div class="form-group mb-3">
    <label for="dish_id">{{__('Блюдо')}}</label>
    <select name="dish_id" class="form-control">
        @foreach ($dishes as $dish)
            <option value="{{$dish->id}}">{{$dish->dish_name}}</option>
        @endforeach
    </select>
    <x-error name="dish_id"/>
</div>