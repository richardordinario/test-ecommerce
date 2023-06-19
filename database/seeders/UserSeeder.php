<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {
            User::create([
                'name' => 'User '. $i,
                'email' => "email{$i}@mail.com",
                'password' => bcrypt('asdqwe123'),
                'email_verified_at' => Carbon::now()
            ]);
        }
    }
}
