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
         $this->call(FavoriteTeamTableSeeder::class);
         $this->call(ProfilesTableSeeder::class);
         $this->call(SchedulesTableSeeder::class);
    }
}
