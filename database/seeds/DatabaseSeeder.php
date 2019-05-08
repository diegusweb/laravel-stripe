<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'Usuario Prueba',
            'email' => 'prueba@example.com',
            'password' => bcrypt('123123')
        ]);
    }
}
