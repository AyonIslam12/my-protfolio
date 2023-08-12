<?php

namespace Database\Seeders;

use Database\Seeders\Admin\AdminSeeder;
use Database\Seeders\Admin\EmailTemplateSeeder;
use Database\Seeders\Admin\FrontendSeeder;
use Database\Seeders\Admin\GeneralSettingSeeder;
use Database\Seeders\Admin\PageSeeder;
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
       $this->call([
        AdminSeeder::class,
        EmailTemplateSeeder::class,
        GeneralSettingSeeder::class,
        PageSeeder::class,
        FrontendSeeder::class

       ]);
    }
}
