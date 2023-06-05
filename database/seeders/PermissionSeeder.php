<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        $permissions = ['просмотр склада', 'создание заказа', 'добавление заказа', 'удаление товаров'];

        foreach($permissions as $permission)
        {
            Permission::create([
                'name' => $permission,
            ]);
        }
    }
}
