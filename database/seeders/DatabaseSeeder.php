<?php

namespace Database\Seeders;

use App\Import;
use App\Models\User;
use App\Models\Word;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();      

        $this->call([
            UserSeeder::class,            
            LanguageCodeSeeder::class,
            ReferenceSeeder::class,
            PersonSeeder::class,
            WordSeeder::class,
            SentenceSeeder::class,
            QuoteSeeder::class,
        ]);                
    }
}
