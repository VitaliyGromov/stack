<div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{__('Заказано макс. ')}} {{$maxOrdersQuantity}}</li>
        <li class="list-group-item">{{__('Заказано мин. ')}} {{$minOrdersQuantity}}</li>
        <li class="list-group-item">{{__('Заказано ср. ')}} {{$avgOrdersQuantity}}</li>
        <li class="list-group-item">{{__('Заказано общ. ')}} {{$sumOrdersQuantity}}</li>
        <li class="list-group-item">{{__('Всего заказов: ')}} {{$countOrders}}</li>
        <li class="list-group-item"></li>
        <li class="list-group-item">{{__('Цена макс. ')}} {{$maxPrice}}</li>
        <li class="list-group-item">{{__('Цена мин. ')}} {{$minPrice}}</li>
        <li class="list-group-item">{{__('Цена ср. ')}} {{$avgPrice}}</li>
        <li class="list-group-item">{{__('Цена общ. ')}} {{$totalPrice}}</li>
        <li class="list-group-item"></li>
        <li class="list-group-item">{{__('Самый ранний заказ ')}} {{$earliestDate}}</li>
        <li class="list-group-item">{{__('Самый поздний заказ ')}} {{$latestDate}}</li>
    </ul>
</div>
