<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $user = new User;
        $user->name = 'Yvan Garmy-Zimmermann';
        $user->covername = 'Wizard'; 
        $user->password = Hash::make('password');
        $user->email = 'zimmeryvan@gmail.com';
        $user->role = 1;
        $user->save();
    }
}
