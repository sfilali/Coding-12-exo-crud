<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-1.jpg',
            'titre' => 'Portfolio 1',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-2.jpg',
            'titre' => 'Portfolio 2',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-3.jpg',
            'titre' => 'Portfolio 3',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-4.jpg',
            'titre' => 'Portfolio 4',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-5.jpg',
            'titre' => 'Portfolio 5',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-6.jpg',
            'titre' => 'Portfolio 6',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-7.jpg',
            'titre' => 'Portfolio 7',
            'description' => 'Alored dono par',
        ]);
        DB::table('portfolios')->insert([
            'img_url' => 'img/portfolio-8.jpg',
            'titre' => 'Portfolio 8',
            'description' => 'Alored dono par',
        ]);
        
    }
}
