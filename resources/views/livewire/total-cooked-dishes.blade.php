<div>
    <x-table>
        <thead>
            <tr>
                <th scope="col">{{__('Всего записей в таблице')}}</th>
                <th scope="col">{{__('Приготовлено макс. ')}}</th>
                <th scope="col">{{__('Приготовлено мин.')}}</th>
                <th scope="col">{{__('Приготовлено ср.')}}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$totalCookedDishes}}</td>
                <td>{{$maxQuantityOfCookedDishes}}</td>
                <td>{{$minQuantityOfCookedDishes}}</td>
                <td>{{$avgQuantityOfCookedDishes}}</td>
            </tr>
        </tbody>
    </x-table>
</div>
