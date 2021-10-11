<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultAdmin = [
            'name' => "Phạm Quang Linh",
            'email' => "phamquanglinhdev@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("Linhz123@"),
            'remember_token' => Str::random(10),
            'role'=>random_int(0,1),
            'avatar'=>"uploads/234869538_584536592582766_4369386866456327677_n (1).jpg",
        ];
        User::factory()
            ->count(10)
            ->create();
    }
}
