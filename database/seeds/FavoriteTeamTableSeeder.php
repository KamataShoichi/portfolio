<?php

use Illuminate\Database\Seeder;

class FavoriteTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FavoriteTeam::class, 20)->create();
        //
    }
}
