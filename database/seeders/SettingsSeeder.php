<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Premier Mart is sri lankan e-commerce web application build from laravel framework. You have the the chance to get a real-world online shopping expirience through this web application. It includes whatever u need to see in modern day virtual shopping. We are still thinking of further effective changes in premier mart. Therefore you can give us your feedback.",
            'short_des'=>"Premier mart is your place to purchase anything u need in digital world. Keep shooping u will find your best match.",
            'photo'=>"/storage/photos/1/blog3.jpg",
            'logo'=>'/storage/photos/1/PMlogo.png',
            'address'=>"14/7 , Stanley Thilakarathna Mawatha , Nugegoda",
            'email'=>"premiermart@gmail.com",
            'phone'=>"+94 11 22567890",
        );
        DB::table('settings')->insert($data);
    }
}
