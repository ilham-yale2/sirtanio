<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about')->delete();
        
        \DB::table('about')->insert(array (
            0 => 
            array (
                'id' => 1,
                'about_title' => 'About Sirtanio Organik Indonesia',
                'about_text' => '<div>Sirtanio Organik Indonesia is the leading organic rice producer in Indonesia. We sustainably supply the needs of the market of red rice and mix organic rice.</div><div><br></div><div>Our Products Sirtanio Organic Indonesia which can nourish the people and the business model increases farmers’ welfare and also to improve the environment.</div>',
                'value_title' => 'Core Value',
                'value_text' => '<p>Sirtanio Organik Indonesia increase farmers’ welfare by reducing the cost of rice cultivation by reducing inputs with organic rice cultivation technology. The purchase price of the harvest is determined by a contract by a margin of 25-30% above the purchase price of the common.</p><p><br></p><p>Organic rice can also reduce health care costs for customers who consume it. Eating organic food, health consumers are more awake and several testimonials of consumers say that organic rice has been a cure for some illness, such as diabetes, constipation, cancer.</p>',
                'vision_title' => 'Vision',
                'vision_text' => 'Improving the rice farmers welfare – Healthier world',
                'certificate_title' => 'Certification',
                'certificate_img' => 'certificate_img/8nN45BHd08IUWH4LUDaQIqUHhkgjzC3fQP8EazdX.jpg',
                'certificate_text' => '<div>Sirtanio Organic Indonesia has received various quality assurance certificates as supporting the way of organic rice business in Indonesia.</div><div><br></div><ul><li><b>Certificates Organic Agriculture</b></li></ul><div>SNI No: 6729 2010 from LeSOS No Reg: 048-LPO-005-IDN-12-15</div><ul><li><b>Certificates Chemical residue free&nbsp;&nbsp;</b></li></ul><p>from Sucofindo No 3508880</p><ul><li><b>Certificates Adequacy of Nutrition</b></li></ul><div>from Laboratory Department of Science and Technology of food, Faculty of Agricultural Technology, IPB Bogor No : 014-12/FL/4.2.3/LDITP</div>',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:14:44',
            ),
        ));
        
        
    }
}