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
        //c_sousen Product Tables data seeder
        //This seeder file namely DatabaseSeeder actualy seeds data from compiling .php files <data provided to seeder file>
        //as we have already created our ProductsTableSeeder with data hence following line will be reading data from the following mentioned class
        //and update/seeds those data to the larablog database 
        //make sure always to migrate and seed while interacting with tha database
         $this->call(ProductsTableSeeder::class);
    }
}
