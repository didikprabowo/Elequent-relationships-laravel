<?php

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

       $univ = 'database/seeds/universitas_20181017_121055.sql';
       DB::unprepared(file_get_contents($univ));
       $this->command->info('Table Success seeded!');
    }
}
