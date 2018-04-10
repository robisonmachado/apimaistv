<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'cliente'
        ]);

        DB::table('user_types')->insert([
            'nome' => 'revendedor'
        ]);

        DB::table('generos')->insert([
            'nome' => 'administrador'
        ]);

        DB::table('generos')->insert([
            'superfuckyou' => ''
        ]);

        
    }
}
