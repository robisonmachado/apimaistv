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
        DB::table('generos')->insert([
            'nome' => 'Romance'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Ação'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Aventura'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Ficção Científica'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Terror'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Suspense'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Faroeste'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Policial'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Comédia'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Infantil'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Animação'
        ]);


        DB::table('generos')->insert([
            'nome' => 'Desenho Animado'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Adulto'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Erótico'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Espionagem'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Fantasia'
        ]);
        
        DB::table('generos')->insert([
            'nome' => 'Guerra'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Épico'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Histórico'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Drama'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Biografia'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Nacional'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Religioso'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Família'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Infantil Kids'
        ]);


        DB::table('generos')->insert([
            'nome' => 'Super-heróis'
        ]);
    }
}
