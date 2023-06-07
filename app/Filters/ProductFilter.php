<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const ID = 'id';

    public const PRODUCT_NAME = 'product_name';

    public const QUANTITY = 'quantity';

    public function getCallbacks(): array
    {
        return [
            self::ID => [$this, 'id'],
            self::PRODUCT_NAME => [$this, 'productName'],
            self::QUANTITY => [$this, 'quantity'],
        ];
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }

    public function productName(Builder $builder, $value)
    {
        $builder->where('product_name', 'ILIKE', "%$value%");
    }

    public function quantity(Builder $builder, $value)
    {
        $builder->where('quantity', $value);
    }
}

?>