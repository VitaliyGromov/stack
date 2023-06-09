<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class FilteredModelService
{
    public function getFilteredModel(Request $request, $className, $filterName): Collection
    {
        $model = app("$className");

        $validated = $request->validated();

        $filter = app()->make($filterName, ['queryParams' => array_filter($validated)]);

        return $model::filter($filter)->get();
    }
}
?>