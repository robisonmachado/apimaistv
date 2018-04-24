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
            'name' => 'toor',
            'email' => 'toor@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 5,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'cliente1',
            'email' => 'cliente1@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'robison',
            'email' => 'robison@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'saulo',
            'email' => 'saulo@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'samuel',
            'email' => 'samuel@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'diego',
            'email' => 'diego@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'fabiano',
            'email' => 'fabiano@maistv.xyz',
            'password' => '$2y$10$9XCjXZqVp8/Ed.PZvdK0N.YGn5Zfm0A/hyOScJvoyAisfH7cJQ3ii',
            'user_type_id' => 1,
            'pai_id' => 1
        ]);

        

        
    }
}
