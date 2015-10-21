<?php


use App\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'	=> 'Don Puerto',
            'email' => 'don.puerto@hotmail.com',
            'password' => bcrypt('siemens1003')

        ]);


        User::create([

            'name'	=> str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')

        ]);
    }
}
