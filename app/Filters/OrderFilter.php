<?php
namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class OrderFilter extends AbstractFilter
{
    public const ID = 'id';

    public const QUANTITY = 'quantity';

    public const PRICE = 'price';

    public const ORDER_DATE = 'order_date';

    public const PRODUCT_ID = 'product_id';

    public function getCallbacks(): array
    {
        return [
            self::ID => [$this, 'id'],
            self::QUANTITY => [$this, 'quantity'],
            self::PRICE => [$this, 'price'],
            self::ORDER_DATE => [$this, 'orderDate'],
            self::PRODUCT_ID => [$this, 'productId'],
        ];
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }

    public function quantity(Builder $builder, $value)
    {
        $builder->where('quantity', $value);
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price', $value);
    }

    public function orderDate(Builder $builder, $value)
    {
        $builder->where('order_date', $value);
    }

    public function productId(Builder $builder, $value)
    {
        $builder->where('product_id', $value);
    }
}
?>