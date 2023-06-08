<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Actions\User\UserStoreAction;
use App\Filters\UserFilter;
use App\Http\Requests\User\UserFilterRequest;
use App\Http\Requests\User\UserStoreRequest;


class UserController extends Controller
{
    public function index(UserFilterRequest $request)
    {
        $validated = $request->validated();

        $filter = app()->make(UserFilter::class, ['queryParams' => array_filter($validated)]);

        $users = User::filter($filter)->get();

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
}
