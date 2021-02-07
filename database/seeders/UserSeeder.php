<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Hidalgo Ch Ponce',
            'email' => 'hidalgo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('Admin');
        $user::factory(99)->create();

    }
}
