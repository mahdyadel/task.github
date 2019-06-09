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
        $user = \App\User::create([
            'first_name' => 'mahdy',
            'last_name' => 'adel',
            'email' => 'mahdy@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $user->attachRole('super_admin');

    }//end of run

}//end of seeder
