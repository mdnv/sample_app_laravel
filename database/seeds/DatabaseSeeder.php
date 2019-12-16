<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        # Create a main sample user.
        DB::table('users')->insert([
            'name' => "Example User",
            'email' => "example@railstutorial.org",
            'password' => Hash::make("foobar"),
            'admin' => true,
        ]);

        # Generate a bunch of additional users.
        DB::table('users')->insert([
            'name' => "Example User 2",
            'email' => "example-2@railstutorial.org",
            'password' => Hash::make("foobar"),
            'admin' => false,
        ]);

        # Generate microposts for a subset of users.
        # Create following relationships.
    }
}
