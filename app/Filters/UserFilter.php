<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const ID = 'id';

    public const NAME = 'name';

    public const LAST_NAME = 'last_name';

    public const SURNAME = 'surname';

    public const ROLE_NAME = 'role_name';

    public const EMAIL = 'email';

    public function getCallbacks(): array
    {
        return [
            self::ID => [$this, 'id'],
            self::NAME => [$this, 'name'],
            self::LAST_NAME => [$this, 'lastName'],
            self::SURNAME => [$this, 'surname'],
            self::ROLE_NAME => [$this, 'roleName'],
            self::EMAIL => [$this, 'email'],
        ];
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'ILIKE', "%$value%");
    }

    public function lastName(Builder $builder, $value)
    {
        $builder->where('last_name', 'ILIKE', "%$value%");
    }

    public function surname(Builder $builder, $value)
    {
        $builder->where('surname', 'ILIKE', "%$value%");
    }

    public function email(Builder $builder, $value)
    {
        $builder->where('email', 'ILIKE', "%$value%");
    }

    public function roleName(Builder $builder, $value)
    {
        $builder->role($value)->get();
    }
}
?>