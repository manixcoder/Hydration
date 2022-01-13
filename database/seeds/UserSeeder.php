<?php

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
        DB::table('users')->delete();
        $userData = array(
            array(
                'id' => 1,
                'user_role'=>'1',
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Qwert@123'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'remember_token' => null,
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s"),
            ),

        );
        DB::table('users')->insert($userData);
    }
}
