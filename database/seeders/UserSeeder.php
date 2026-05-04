<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        $superAdmin = User::updateOrCreate(
            ['email' => 'superadmin@everycity.org'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('9EvERY$cITY#(31'),
            ]
        );
        $superAdmin->assignRole('super_admin');
        // Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@everycity.org'],
            [
                'name' => 'EveryCity Admin',
                'password' => Hash::make('9EvERY$cITY#(31'),
            ]
        );
        // $admin = User::firstOrCreate(
        //     ['email' => 'admin@everycity.org'],
        //     [
        //         'name' => 'EveryCity Admin',
        //         'password' => Hash::make('9EvERY$cITY#(31'),
        //     ]
        // );
        $admin->assignRole('admin');
    }
}
