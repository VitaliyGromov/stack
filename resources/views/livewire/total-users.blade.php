<div>
    <x-table>
        <thead>
            <tr>
                <th scope="col">{{__('Всего пользователей')}}</th>
                <th scope="col">{{__('Админы')}}</th>
                <th scope="col">{{__('Работники склада')}}</th>
                <th scope="col">{{__('Работники кухни')}}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$totalUsers}}</td>
                <td>{{$admins}}</td>
                <td>{{$stockWorkers}}</td>
                <td>{{$kitchenWorkers}}</td>
            </tr>
        </tbody>
    </x-table>
</div>
