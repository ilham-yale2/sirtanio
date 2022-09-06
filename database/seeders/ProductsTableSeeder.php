<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_title' => 'Beras Coklat',
                'product_image' => 'product_image/0OQe0ZIQ99zhpPhCvHtuUR5YCxDsb0erjPgLQw0M.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:23:56',
                'updated_at' => '2022-07-15 03:23:56',
            ),
            1 => 
            array (
                'id' => 2,
                'product_title' => 'Beras Hitam Melik',
                'product_image' => 'product_image/krPzwdn1AkhmDLHbg5vBMm6xVNXGPiyYQEBQBRSJ.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:24:03',
                'updated_at' => '2022-07-15 03:24:03',
            ),
            2 => 
            array (
                'id' => 3,
                'product_title' => 'Beras Hitam',
                'product_image' => 'product_image/MPvgoDV0mvtUIsOtebL1htRNNKYlcKNSFcQPS6W1.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:24:13',
                'updated_at' => '2022-07-15 03:24:13',
            ),
            3 => 
            array (
                'id' => 4,
                'product_title' => 'Beras Merah',
                'product_image' => 'product_image/nYIzk8MngapNma9aAaQyAPg1csCpoEnADegwL5Fk.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:24:21',
                'updated_at' => '2022-07-15 03:24:21',
            ),
            4 => 
            array (
                'id' => 5,
                'product_title' => 'Beras Putih',
                'product_image' => 'product_image/QCTHoc33wDNMflkCyoUbcvc5voGancmFi69iB6sd.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:24:28',
                'updated_at' => '2022-07-15 03:24:28',
            ),
            5 => 
            array (
                'id' => 6,
                'product_title' => 'Sereal Beras Merah',
                'product_image' => 'product_image/wC7VCZDpzT3z53ECiydSdTI0k1HHaRebgX9KlBq6.jpg',
                'link1' => NULL,
                'link2' => NULL,
                'created_at' => '2022-07-15 03:24:35',
                'updated_at' => '2022-07-15 03:24:35',
            ),
        ));
        
        
    }
}