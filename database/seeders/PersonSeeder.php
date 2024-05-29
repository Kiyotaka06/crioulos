<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('people')->truncate();

        DB::table('people')->insert([
            'name' => 'David Freitas',
            'email' => 'dvdfreitas@gmail.com',
            'image' => 'dvdfreitas.jpg',
            'facebook' => 'dvdfreitas',
            'instagram' => 'dvdctfreitas',
            'linkedin' => 'dvdfreitas',
            'homepage' => 'https://ambulanceforhearts.pt/davidfreitas',
            'description' => 'Criador da plataforma e voluntário na ONGD "Na Rota dos Povos"'
        ]);

        DB::table('people')->insert([
            'name' => 'Rafael Vieira',
            'email' => 'rafinhapt06@gmail.com',
            'image' => 'rafael.jpg',
            'instagram' => '_vieira_06',
            'description' => 'Estudante da Escola Secundária de Gondomar"'
        ]);

        DB::table('people')->insert([
            'name' => 'Pedro Pais',
            'email' => 'rochinhas.pais@gmail.com',
            'image' => 'pedro.jpg',
            'instagram' => 'zlept_',
            'description' => 'Estudante da Escola Secundária de Gondomar"'
        ]);
    }
}
