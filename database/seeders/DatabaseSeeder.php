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
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
        // User::factory(10)->create();
>>>>>>> create_table_database
=======
=======
>>>>>>> function_login_and_logout
=======
>>>>>>> layout_login_and_register
        $this->call([Products::class]);
        $this->call([Protypes::class]);
        $this->call([Manufactures::class]);
        $this->call([Features::class]);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> detail_and_related_product
=======
        $this->call([Users::class]);
>>>>>>> function_login_and_logout
=======
        $this->call([Users::class]);
>>>>>>> layout_login_and_register
    }
}
