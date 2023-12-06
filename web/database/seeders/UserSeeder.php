<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
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
        //
        $user1 = User::create([
            "first_name" => "Admin",
            "last_name"=> "User",
            "email" => "admin@emembroidr.io",
            "password"=> password_hash("password",PASSWORD_DEFAULT),
        ]);
        if($user1->save()){
            UserRole::create([
                'role_id' => 1,
                'user_id' => $user1->id
            ]);
        }

        $user2 = User::create([
            "first_name" => "Store",
            "last_name"=> "User",
            "email" => "store@emembroidr.io",
            "password"=> password_hash("password",PASSWORD_DEFAULT),
        ]);
        if($user2->save()){
            UserRole::create([
                'role_id' => 2,
                'user_id' => $user2->id
            ]);
        }
    }
}
