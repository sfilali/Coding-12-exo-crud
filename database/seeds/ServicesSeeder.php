<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icone' => 'fa fa-desktop',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-bar-chart',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-paper-plane',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-photo',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-road',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);

        DB::table('services')->insert([
            'icone' => 'fa fa-shopping-bag',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
        ]);
    }
}
