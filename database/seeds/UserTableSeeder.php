<?php

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
        DB::table('users')->insert([
            ['role_id' => 1, 'name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('123456'), 'avatar' => '私.jpg', 'status' => 'active'],
            ['role_id' => 2, 'name' => 'Trung', 'email' => 'trung@gmail.com', 'password' => bcrypt('123456'), 'avatar' => '私.jpg', 'status' => 'active'],
            ['role_id' => 2, 'name' => 'Tien', 'email' => 'tien@gmail.com', 'password' => bcrypt('123456'), 'avatar' => '人を信じる.jpg', 'status' => 'active'],
        ]);
    }
}
