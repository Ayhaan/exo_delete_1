<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membres')->insert([

            [
                "nom" => "ayhan",
                "genre" => "homme",
                "age" => 24,
                "created_at" => now()
            ],
            [
                "nom" => "Elias",
                "genre" => "homme",
                "age" => 25,
                "created_at" => now()
            ],
            [
                "nom" => "Elias",
                "genre" => "homme",
                "age" => 25,
                "created_at" => now()
            ],
            [
                "nom" => "Elias",
                "genre" => "homme",
                "age" => 25,
                "created_at" => now()
            ],

        ]);
    }
}
