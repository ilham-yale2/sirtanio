<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpreasonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opreason')->delete();
        
        \DB::table('opreason')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reason' => 'High Order Repeat',
                'created_at' => '2022-07-15 03:26:15',
                'updated_at' => '2022-07-15 03:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'reason' => 'Mutual cooperation',
                'created_at' => '2022-07-15 03:26:20',
                'updated_at' => '2022-07-15 03:26:20',
            ),
            2 => 
            array (
                'id' => 3,
                'reason' => 'Wide Market Amount And grow continuously',
                'created_at' => '2022-07-15 03:26:23',
                'updated_at' => '2022-07-15 03:26:23',
            ),
            3 => 
            array (
                'id' => 4,
                'reason' => 'Rice Is Main Item of basic needs',
                'created_at' => '2022-07-15 03:26:27',
                'updated_at' => '2022-07-15 03:26:27',
            ),
            4 => 
            array (
                'id' => 5,
                'reason' => 'Product Has Positive Market Trend',
                'created_at' => '2022-07-15 03:26:30',
                'updated_at' => '2022-07-15 03:26:30',
            ),
        ));
        
        
    }
}