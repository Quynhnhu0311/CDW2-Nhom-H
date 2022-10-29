<?php

namespace Database\Seeders;

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
        $this->call([Products::class]);
        $this->call([Protypes::class]);
        $this->call([Manufactures::class]);
        $this->call([Features::class]);
    }
}
