<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=array(
            array(
                'name'=>'Namdev23',
                'email'=>'namdev@mail.com',
                'password'=>Hash::make('Namdev'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'Customer 1',
                'email'=>'customer1@mail.com',
                'password'=>Hash::make('customer'),
                'role'=>'user',
                'status'=>'active'
            ),
        );
        foreach ($users as $user) {
            // Kiểm tra xem email đã tồn tại chưa
            if (!DB::table('users')->where('email', $user['email'])->exists()) {
                DB::table('users')->insert($user);
            }


        DB::table('users')->insert($users);
    }
}}
