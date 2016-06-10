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
                "username"  => "Buddy",
                "first_name" => "New",
                "last_name"  => "Buddy",
                "email" => "Buddy@user.com",
                "password" => bcrypt("secret")
            ],
            [
                "username"  => "User",
                "first_name" => "Bobby",
                "last_name"  => "Cameo",
                "email" => "user@luser.com",
                "password" => bcrypt("secret")
            ],
            [
                "username"  => "Lex",
                "first_name" => "See",
                "last_name"  => "Me",
                "email" => "lex@user.com",
                "password" => bcrypt("secret")
            ],
        ]);
    }
}
