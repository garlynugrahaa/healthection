<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator Healthection',
            'email' => 'administrator@healthection.com',
            'email_verified_at' => now(),
            'password' => Hash::make('wjN"[vhG?D=znVQu;63U'),
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ])->assignRole('Administrator');

        User::create([
            'name' => 'Garly Nugraha',
            'email' => 'garlynugrahaa@healthection.com',
            'email_verified_at' => now(),
            'password' => Hash::make('A>eC;)6f(!nbkvUm<WT+cN'),
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ])->assignRole('Operator');
    }
}
