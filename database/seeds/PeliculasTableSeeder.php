<?php

use Illuminate\Database\Seeder;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 25; $i++) { 
        DB::table('peliculas')->insert([
            'destino' => str_random(10),
            'origen' => str_random(10),
            'numero' => rand(5, 15),
            'user_id' => 1,
        ]);
        }
    }
}
