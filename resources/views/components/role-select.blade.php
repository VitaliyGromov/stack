<select name="role_name" class="form-control">
    <option value="">{{__('Выберите роль')}}</option>
    @foreach ($roles as $role)
        <option value="{{$role->name}}">{{$role->name}}</option>
    @endforeach
</select>
<x-error name="role_name"/>