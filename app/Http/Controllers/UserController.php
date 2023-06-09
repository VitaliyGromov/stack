<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Actions\User\UserStoreAction;
use App\Helpers\TableToJsonConverter;
use App\Helpers\TableToXmlFormater;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserFilterRequest;
use App\Services\FilteredModelService;
use App\Filters\UserFilter;

class UserController extends Controller
{
    public function index(UserFilterRequest $request, FilteredModelService $service)
    {
        $users = $service->getFilteredModel($request, User::class, UserFilter::class);

        return view('users.index', compact('users'));
    }

    public function store(UserStoreRequest $request, UserStoreAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated);

        return redirect('users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users');
    }

    public function saveToJson(UserFilterRequest $request, FilteredModelService $service)
    {
        $users = $service->getFilteredModel($request, User::class, UserFilter::class);

        $tableToJsonCoverter = new TableToJsonConverter($users);

        $tableToJsonCoverter->save();

        return redirect()->back();
    }

    public function saveToXml(UserFilterRequest $request, FilteredModelService $service)
    {
        $users = $service->getFilteredModel($request, User::class, UserFilter::class);

        $tableToXmlFormater = new TableToXmlFormater($users);

        $tableToXmlFormater->save();

        return redirect()->back();
    }
}
