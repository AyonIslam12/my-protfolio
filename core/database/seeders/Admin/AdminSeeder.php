<?php

namespace Database\Seeders\Admin;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = array(
            array('name' => 'Mehedi Hasan','email' => 'md.mehedihasaniubat@gmail.com','username' => 'ayondev','email_verified_at' => NULL,'image' => 'seeder/profile.png','password' => Hash::make('ayondev'),'created_at' => now(),'updated_at' => now())
          );
        Admin::insert($admins);
    }
}
