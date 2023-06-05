<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Виталий',
            'last_name' => 'Громов',
            'surname' => 'Васильвич',
            'email' => fake()->email(),
            'password' => Hash::make('1234567890'),
        ]);

        $admin->assignRole('администратор');

        $stackWorcker = User::create([
            'name' => 'Алексей',
            'last_name' => 'Иванов',
            'surname' => 'Альбертович',
            'email' => fake()->email(),
            'password' => Hash::make('ivanovAleksey'),
        ]);

        $stackWorcker->assignRole('рвботник склада');

        $kitchenWorcker = User::create([
            'name' => 'Людмила',
            'last_name' => 'Краснова',
            'surname' => 'Ивановна',
            'email' => fake()->email(),
            'password' => Hash::make('ludmilaIvanovna'),
        ]);

        $kitchenWorcker->assignRole('работник кухни');
    }
}
