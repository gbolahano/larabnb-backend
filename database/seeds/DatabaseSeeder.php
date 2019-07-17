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
        $this->call(UsersTableSeeder::class);
        $this->call(ListingsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
