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
        $this->call(SiteSettingsTableSeeder::class);
         $this->call(GovernoratesTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(BloodTypesTableSeeder::class);
    }
}
