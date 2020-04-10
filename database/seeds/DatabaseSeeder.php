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
        $this->call(IntroSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(TestimonialsSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
