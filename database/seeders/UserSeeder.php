<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->createMany([
            ['name' => 'xzm', 'user' => 'xzm008', 'password' => '123456'],
        ]);
    }
}
