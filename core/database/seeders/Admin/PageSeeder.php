<?php

namespace Database\Seeders\Admin;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = array(
            array('name' => 'HOME','slug' => 'home','tempname' => 'templates.basic.','secs' => '["expertise","skills","portfolio"]','is_default' => '1','created_at' => '2020-07-11 12:23:58','updated_at' => '2023-08-11 23:21:42'),
            array('name' => 'About','slug' => 'about-us','tempname' => 'templates.basic.','secs' => '["about","service","testimonial"]','is_default' => '0','created_at' => '2020-07-11 12:35:35','updated_at' => '2021-08-19 12:35:20'),
            array('name' => 'Portfolio','slug' => 'portfolio','tempname' => 'templates.basic.','secs' => NULL,'is_default' => '0','created_at' => '2023-08-07 21:56:58','updated_at' => '2023-08-07 21:56:58'),
            array('name' => 'Testimonials','slug' => 'testimonials','tempname' => 'templates.basic.','secs' => NULL,'is_default' => '0','created_at' => '2023-08-07 21:57:14','updated_at' => '2023-08-07 21:57:14'),
            array('name' => 'Blog','slug' => 'blog','tempname' => 'templates.basic.','secs' => NULL,'is_default' => '0','created_at' => '2023-08-07 21:57:32','updated_at' => '2023-08-07 21:57:32')
          );
        Page::insert($pages);
    }
}
