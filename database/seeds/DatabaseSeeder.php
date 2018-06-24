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
            'name' => 'Alek Temimovic',
            'email' => 'alek@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '065897342374234',
            'address' => 'stagod',
            'role' => 'user'
        ]);
    }
}
