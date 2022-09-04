<?php

namespace Database\Seeders;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Alok Singh',
            'email' => 'sealoksingh@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567890'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
    }
}