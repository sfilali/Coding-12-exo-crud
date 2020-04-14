<?php

use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Saul Goodman',
            'inc' => 'Lawless Inc',
            'quote' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'picture' => 'img/client-1.jpg'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Sara Wilsson',
            'inc' => 'Odeo Inc',
            'quote' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae.',
            'picture' => 'img/client-2.jpg'
        ]);
    }
}
