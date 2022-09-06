<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'index' => 1,
                'image' => 'partner_image/D3Az5Qog8ostIHznF9eG11DVKB1vVtUEmB4XJ2ar.png',
                'created_at' => '2022-07-15 03:20:18',
                'updated_at' => '2022-07-15 03:20:18',
            ),
            1 => 
            array (
                'id' => 2,
                'index' => 2,
                'image' => 'partner_image/ccyU3H18f0p2WhWs9Cuzh6zour6niRYDHSQ9br3w.png',
                'created_at' => '2022-07-15 03:20:33',
                'updated_at' => '2022-07-15 03:20:33',
            ),
            2 => 
            array (
                'id' => 3,
                'index' => 3,
                'image' => 'partner_image/CjLkynG2SxKThv7P2azbzSOuIOfh2Xii2hmjuo7k.png',
                'created_at' => '2022-07-15 03:20:45',
                'updated_at' => '2022-07-15 03:20:45',
            ),
            3 => 
            array (
                'id' => 4,
                'index' => 4,
                'image' => 'partner_image/hsnf7fUndQJwtkOx6QDL4zJPnHPxOboyypTDnqs9.png',
                'created_at' => '2022-07-15 03:20:50',
                'updated_at' => '2022-07-15 03:20:50',
            ),
        ));
        
        
    }
}