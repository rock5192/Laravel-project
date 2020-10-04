<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::Create([
            'site_name'=>"Laravel's Blog",
            'address'=>"Banasthali,Kathmandu",
            'contact_number'=>'9861009632',
            'contact_email'=>"info@laravel_blog.com",
        ]);
    }
}
