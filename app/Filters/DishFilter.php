<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class DishFilter extends AbstractFilter
{
    public const DISH_NAME = 'dish_name';
    public const ID = 'id';

    public function getCallbacks(): array
    {
        return [
            self::DISH_NAME => [$this, 'dishName'],
            self::ID => [$this, 'id'],
        ];
    }

    public function dishName(Builder $builder, $value)
    {
        $builder->where('dish_name', 'ILIKE', "%$value%");
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }
}
?>