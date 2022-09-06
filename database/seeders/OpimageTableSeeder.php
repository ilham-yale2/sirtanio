<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpimageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opimage')->delete();
        
        \DB::table('opimage')->insert(array (
            0 => 
            array (
                'id' => 1,
                'photo' => 'photo-oppor/3MNDacODgl278jpZ6HpjE9j7NWOscDgfsjxH74PD.jpg',
                'index' => '1',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:25:24',
            ),
            1 => 
            array (
                'id' => 2,
                'photo' => 'photo-oppor/bOf3aRSeZggnkWk0x0GrB99suv5RF82IsdMnuMqk.jpg',
                'index' => '2',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:25:29',
            ),
            2 => 
            array (
                'id' => 3,
                'photo' => 'photo-oppor/OalzHHTHyjIXJzGKAXOfTsxCop1QKKCAl3mBMicM.jpg',
                'index' => '3',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:25:36',
            ),
            3 => 
            array (
                'id' => 4,
                'photo' => 'photo/4R8wGAiX6XrPv02AWNiKC5cA9b83Xv0MrhEFkqMM.jpg',
                'index' => '4',
                'created_at' => NULL,
                'updated_at' => '2022-07-14 08:24:34',
            ),
            4 => 
            array (
                'id' => 5,
                'photo' => 'photo/fll4nCh9XbV4OlmruidYiLUVKZqnsTog8TlkNEYS.jpg',
                'index' => '5',
                'created_at' => NULL,
                'updated_at' => '2022-07-14 08:16:32',
            ),
            5 => 
            array (
                'id' => 6,
                'photo' => 'photo/5IRNPpUKbDAvb77I9gLsVxNy126aWYykZRvZjiA3.jpg',
                'index' => '6',
                'created_at' => NULL,
                'updated_at' => '2022-07-14 08:23:51',
            ),
            6 => 
            array (
                'id' => 7,
                'photo' => 'photo-oppor/OmWfP50OtKCBp6gHsDhxRQLv92PmRpMOesCctVd7.jpg',
                'index' => '7',
                'created_at' => NULL,
                'updated_at' => '2022-07-15 03:25:50',
            ),
        ));
        
        
    }
}