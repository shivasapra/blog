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
        App\Setting::create([
        	'site_name' => 'Blogy',
        	'contact_number' => '7807913361',
        	'contact_Email' => 'ashishsapra7@gmail.com',
        	'address' => '165/32 PatelNagar, MZN ',
        ]);
    }
}
