<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Pops Maellard',
            'email' => 'pops-maellard@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $manager = User::create([
            'name' => 'Benson Dunwoody',
            'email' => 'benson-dunwoody@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $staff1 = User::create([
            'name' => 'Rigby',
            'email' => 'rigby@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $staff2 = User::create([
            'name' => 'Mordecai',
            'email' => 'mordecai@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        $admin->roles()->attach(Role::where('name', 'admin')->first());
        $manager->roles()->attach(Role::where('name', 'manager')->first());
        $staff1->roles()->attach(Role::where('name', 'staff')->first());
        $staff2->roles()->attach(Role::where('name', 'staff')->first());
    }
}
