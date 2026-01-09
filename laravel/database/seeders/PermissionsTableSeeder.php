<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        Permission::insert([
            ['name' => 'users.manage'],
            ['name' => 'products.create'],
            ['name' => 'products.update'],
            ['name' => 'products.delete'],
            ['name' => 'category.create'],
            ['name' => 'category.update'],
            ['name' => 'category.delete'],
        ]);
    }
}
