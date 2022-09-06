<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bg_img' => 'home-img/WMn8sz3RVfrNdqA9Ch0lURhHvwmJoM1wPLjDqIIl.png',
                'title' => 'Indonesia\'s leading organic rice producer',
                'sub_title' => 'Sirtanio Organik Indonesia is the leading organic rice producer in Indonesia. We can sustainably supply the needs of the market. Sirtanio produce Red rice and mix organic rice.<br> Our Products which can nourish the people and the business model increases farmers’ welfare and also to improve the environment.',
                'created_at' => '2022-07-15 03:06:34',
                'updated_at' => '2022-07-15 03:06:34',
            ),
        ));
        
        
    }
}