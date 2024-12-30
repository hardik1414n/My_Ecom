<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
        $user2= User::factory()->create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
        ]);
        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Writter']);

        $user->syncRoles($role);

        $user2->syncRoles($role2);
    }
}