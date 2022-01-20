<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Membre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        //FACTORY
        Membre::factory(20)->create();

        //SEEDER
        // $this->call([
        //     MembreSeeder::class,
        // ]);
    }
}
