<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

        	'nama' => 'admin',
        	'email' => 'yanuarkurnianto1@gmail.com',
        	'username' => 'kurnianto43',
        	'password' => bcrypt(1234),

        ]);

        $user->assignRole('admin');
    }
}
