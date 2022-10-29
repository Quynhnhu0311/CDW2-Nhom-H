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
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
        // User::factory(10)->create();
>>>>>>> create_table_database
=======
        $this->call([Products::class]);
        $this->call([Protypes::class]);
        $this->call([Manufactures::class]);
        $this->call([Features::class]);
>>>>>>> detail_and_related_product
    }
}
