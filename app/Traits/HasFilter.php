<?php
namespace App\Traits;

use App\Filters\FilterContract;
use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, FilterContract $filter)
    {
        $filter->apply($builder);

        return $builder;
    }
}
?>