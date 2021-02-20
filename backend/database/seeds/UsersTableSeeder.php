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
        DB::table('users')->insert([
            [
                'name'     => 'aaa',
                'email'    => 'test@test.com',
                'password' => Hash::make('password123'),
            ],[
                'name'     => 'bbb',
                'email'    => 'test2@test.com',
                'password' => Hash::make('password123'),
            ],[
                'name'     => 'ccc',
                'email'    => 'test3@test.com',
                'password' => Hash::make('password123'),
            ]
        ]);
    }
}
