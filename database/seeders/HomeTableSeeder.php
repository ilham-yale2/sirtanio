<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home')->delete();
        
        \DB::table('home')->insert(array (
            0 => 
            array (
                'id' => 1,
                'farmer' => '1562',
                'land' => '128',
                'title' => 'What we do',
                'sub_title' => '<p>Sirtanio produce the organic rice using certified integrated organic farming system. We partner up with rice farmers in the are of Indonesia such as Banyuwangi, Jember, Situbondo, Bondowoso and Lumajang.

We provide seed loan, fertilisers, skilled labour, cultivation management training and we offer the purchase contract of their harvest at 20% – 30% higher price than the local price. Sirtanio Organic Indonesia is now partnering with more than 1000 rice farmers and is growing annually with more than 485 ha of certified organic land.</p><p><br></p><p style="text-align: center; "><iframe frameborder="0" src="//www.youtube.com/embed/sP1h5SUO4C0" width="640" height="360" class="note-video-clip"></iframe><br></p><p><br></p><p style="text-align: center; "><img src="https://sirtanio.id/wp-content/uploads/2017/04/whatwedo.jpg" style="width: 50%;"><br></p><p><br></p><p style="text-align: center; "><br></p>',
                'deskripsi' => '<p><img src="https://sirtanio.id/wp-content/uploads/2021/07/Sirtanio-1.png" style="width: 25%;"></p><p><br></p><p><b>Sirtanio Organik Indonesia</b><br></p>',
                'benefit_title' => 'Benefits of organic red rice',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:09:14',
            ),
        ));
        
        
    }
}