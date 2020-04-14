<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'Walter White',
            'job' => 'Chief Executive Officer',
            'photo' => 'img/team-1.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'Sarah Jhinson',
            'job' => 'Product Manager',
            'photo' => 'img/team-2.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'William Anderson',
            'job' => 'CTO',
            'photo' => 'img/team-3.jpg'
        ]);
        DB::table('teams')->insert([
            'name' => 'Amanda Jepson',
            'job' => 'Accountant',
            'photo' => 'img/team-4.jpg'
        ]);
    }
}
