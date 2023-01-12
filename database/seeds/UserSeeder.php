<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => 'Admin',
            'username' => 'Admin1',
            'email' => 'Admin@gmail.com',
            'phone'    => '0111111111111',
            'password' => Hash::make('password'), // password
            'memberShip' => Str::random(10),
            'companyName' => Str::random(12),
            'email_verified_at' => now(),
            'birthday' => now(),
        ]);

        User::factory()
        ->count(10)
        ->create();
    }
}
