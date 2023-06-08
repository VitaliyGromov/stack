<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\User;
use App\Filters\UserFilter;


class FilteredModelService
{
    public function getFilteredModel(Request $request): Collection
    {
        $validated = $request->validated();

        $filter = app()->make(UserFilter::class, ['queryParams' => array_filter($validated)]);

        return User::filter($filter)->get();
    }
}
?>