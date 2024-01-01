<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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

        User::factory()->create([
            'name' => 'Omar Akrab',
            'email' => 'admin2@gmail.com',
            'password' =>Hash::make('xYz12@d@BolaEl3arab'),
        ]);

        $this->call([
            HomeSeeder::class,
        ]);



    }
}
