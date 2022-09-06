<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'photo' => 'photo_team/YM2U0QAf0Rtx752TURSCxHwqeLAFIDsYfxmhP2fs.jpg',
                'name' => 'Samanhudi',
                'position' => 'Investor',
                'sosial_media1' => NULL,
                'sosial_media2' => NULL,
                'sosial_media3' => NULL,
                'created_at' => '2022-07-15 03:21:23',
                'updated_at' => '2022-07-15 03:21:23',
            ),
            1 => 
            array (
                'id' => 2,
                'photo' => 'photo_team/4gKS5Uz9g0LX9pjC8zcoUzd2PDuWDT4kayQ6Ofm5.jpg',
                'name' => 'A.R Jauhari, S.E',
                'position' => 'Co-founder',
                'sosial_media1' => NULL,
                'sosial_media2' => NULL,
                'sosial_media3' => NULL,
                'created_at' => '2022-07-15 03:21:31',
                'updated_at' => '2022-07-15 03:21:31',
            ),
            2 => 
            array (
                'id' => 3,
                'photo' => 'photo_team/BmLt8ED2J9ZBFccjHVcA3x6kxYO9s6KDrb5sEXWv.jpg',
                'name' => 'Shohib Q D, S.TP',
                'position' => 'Co-founder',
                'sosial_media1' => NULL,
                'sosial_media2' => NULL,
                'sosial_media3' => NULL,
                'created_at' => '2022-07-15 03:21:46',
                'updated_at' => '2022-07-15 03:21:46',
            ),
            3 => 
            array (
                'id' => 4,
                'photo' => 'photo_team/HubyamBCu6OKGIOXBgqm1VwJnyOi3PmIfCDqsb9n.jpg',
                'name' => 'Ahmed Tessario, S.T',
                'position' => 'Founder',
                'sosial_media1' => NULL,
                'sosial_media2' => NULL,
                'sosial_media3' => NULL,
                'created_at' => '2022-07-15 03:21:58',
                'updated_at' => '2022-07-15 03:21:58',
            ),
        ));
        
        
    }
}