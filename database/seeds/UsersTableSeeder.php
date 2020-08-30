<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

          'first_name' => 'super',
          'last_name' => 'admin',
          'email' => 'super_admin@gmail.com',
          'password' => bcrypt('12345678'),

        ]);

        $user->attachRole('super_admin');

    }
}
