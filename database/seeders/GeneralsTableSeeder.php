<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generals')->delete();
        
        \DB::table('generals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo_navbar' => 'general-images/qQ89JtIbZrvrKayic3fD1iPgdYkxzlp7cvxfs4gU.png',
                'logo_footer' => 'general-images/89MxeDtyPllt60YfupMJh5nrWRqEwYOZgv6Z9msn.png',
                'facebook' => 'https://www.facebook.com/berasorganikbanyuwangi',
                'instagram' => 'https://www.instagram.com/sirtanio/?hl=en',
                'whatsapp' => 'https://wa.me/6283117004058',
                'tokopedia' => 'https://www.tokopedia.com/sirtanio',
                'shopee' => 'https://shopee.co.id/sirtanio_store',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:05:32',
            ),
        ));
        
        
    }
}