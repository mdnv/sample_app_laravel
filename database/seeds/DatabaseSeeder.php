<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\User;
use App\Comment;

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
        $faker = Faker::create();
        for ($n = 1; $n <= 99; $n++) {
            $name  = $faker->name;
            $email = "example-$n@railstutorial.org";
            $password = Hash::make("password");
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
        }

        # Generate microposts for a subset of users.
        $users = User::all()->sortBy('created_at')->take(6);

        for ($n = 1; $n <= 50; $n++) {
          $content = $faker->sentence($nbWords = 5);
          foreach ($users as &$user) {
                Comment::create([
                    'commenter' => $user->name,
                    'body'=> $content,
                    'user_id'=> $user->id,
                ]);
            }
        }

        // factory(App\User::class, 6)->each(function ($user) {
        //     $content = $faker->sentence($nbWords = 5);
            // Comment::create([
            //     'commenter' => $user->name,
            //     'body'=> $content,
            //     'user_id'=> $user->id,
            // ]);
        // });

        # Generate microposts for a subset of users.
        # Create following relationships.
    }
}
