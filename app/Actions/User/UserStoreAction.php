<?php
namespace App\Actions\User;

use App\Models\User;

class UserStoreAction
{
    public function handle(array $validated)
    {
        $user = User::create($validated);

        $user->assignRole($validated['role_name']);
    }
}
?>