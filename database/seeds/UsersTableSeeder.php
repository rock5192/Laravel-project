<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'=>'saujanya shrestha',
            'email'=>'saujanya93@gmail.com',
            'password'=>bcrypt('helloworld'),
            'admin'=>1,
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'about'=>'hi this is saujanya raj shrestha',
            'facebook'=>'www.facebook.com',
            'youtube'=>'www.youtube.com',
            'avatar'=>'uploads/avatars/saujanya.jpg',
        ]);
    }
}
