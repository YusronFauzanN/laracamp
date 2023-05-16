<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
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
        \App\Models\User::factory(2)->create();
        $this->call([
            CampSeeder::class,
            CampBenefitSeeder::class,
            AdminSeeder::class
        ]);
    }
}
