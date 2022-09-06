<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63181.75884451427!2d114.3310453133171!3d-8.216838527359316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15aeb98f842ab%3A0x4027a76e3530a90!2sBanyuwangi%2C%20Kec.%20Banyuwangi%2C%20Kabupaten%20Banyuwangi%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1657856115905!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'addres' => 'Jl.KH.Mahfud 353, Singojuruh, Banyuwangi, Jawa Timur Indonesia',
                'telephone' => '+62 831-1700-4058',
                'email' => 'organikbanyuwangi@gmail.com',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:35:21',
            ),
        ));
        
        
    }
}