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
        	'name' => 'Shiva Sapra',
        	'email' => 'ashishsapra7@gmail.com',
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'Image link',
            'about' => 'No need to know about me',
            'facebook' => 'www.facebook.com',
            'youtube' => 'www.youtube.com'
        ]);
    }
}
