<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;

class CookedDishesFilter extends AbstractFilter
{
    public const ID = 'id';

    public const DISH_ID = 'dish_id';

    public const QUANTITY = 'quantity';

    public function getCallbacks(): array
    {
        return [
            self::ID => [$this, 'id'],
            self::DISH_ID => [$this, 'dishId'],
            self::QUANTITY => [$this, 'quantity'],
        ];
    }

    public function id(Builder $builder, $vallue)
    {
        $builder->where('id', $vallue);
    }

    public function dishId(Builder $builder, $value)
    {
        $builder->where('dish_id', $value);
    }

    public function quantity(Builder $builder, $value)
    {
        $builder->where('quantity', $value);
    }
}
?>