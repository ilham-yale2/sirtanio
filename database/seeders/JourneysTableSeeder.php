<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JourneysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('journeys')->delete();
        
        \DB::table('journeys')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year' => '2011',
                'body' => '<ul><li>Started to develop organic red rice on 1.6 Ha of land in banyuwangi</li><li>The land succeeded in harvesting with satisfactory results and expanding organic land on 16 Ha</li><li>The rice produced in the name of red healthy rice Seblang Banyuwangi and get a very good respon market from local consumers Banyuwangi</li></ul>',
                'created_at' => '2022-07-15 03:17:37',
                'updated_at' => '2022-07-15 03:17:37',
            ),
        ));
        
        
    }
}