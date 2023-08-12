<?php

namespace Database\Seeders\Admin;

use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email_templates = array(
            array('id' => '3','act' => 'EVER_CODE','name' => 'Email Verification','subj' => 'Please verify your email address','email_body' => '<div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size="6"><b> {{code}}</b></font></div>','shortcodes' => '{"code":"Verification code"}','email_status' => '1','created_at' => now(),'updated_at' => now())
          );
        EmailTemplate::insert($email_templates);
    }
}
