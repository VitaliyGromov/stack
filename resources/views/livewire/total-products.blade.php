<div>
    <div>
        <x-table>
            <thead>
                <tr>
                    <th scope="col">{{__('Всего продуктов')}}</th>
                    <th scope="col">{{__('Наибольшее количество')}}</th>
                    <th scope="col">{{__('Нименьшее количество')}}</th>
                    <th scope="col">{{__('Среднее количество')}}</th>
                    <th scope="col">{{__('Всего продуктов на складе')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$countProducts}}</td>
                    <td>{{$maxProductQuantity}}</td>
                    <td>{{$minProductQuantity}}</td>
                    <td>{{$avgProductQantity}}</td>
                    <td>{{$sumProductQantity}}</td>
                </tr>
            </tbody>
        </x-table>
    </div>
</div>
