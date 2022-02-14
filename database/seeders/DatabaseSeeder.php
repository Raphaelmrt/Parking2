<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'surname'=>'admin',
            'email'=>'admin@mail.fr',
            'admin'=>1,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name'=>'user',
            'surname'=>'user',
            'email'=>'user@mail.fr',
            'admin'=>0,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ]);
         \App\Models\User::factory(10)->create();
         \App\Models\Place::factory(10)->create();
    }
}
