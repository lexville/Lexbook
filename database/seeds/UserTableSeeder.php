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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'username'  => 'Alex',
                'email' => 'lex@user.com',
                'password' => bcrypt('secret')
            ],
            [
                'username'  => 'Alexandra',
                'email' => 'lexi@luser.com',
                'password' => bcrypt('secret')
            ],
            [
                'username'  => 'Lex',
                'email' => 'lex@user.com',
                'password' => bcrypt('secret')
            ],
        ]);
    }
}
