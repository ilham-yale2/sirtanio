<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BenefitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benefits')->delete();
        
        \DB::table('benefits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon' => 'icon/sXqIPZ8uBVIOUhIw8U1l0FkmHNKGO7oBmbjqV9eC.png',
                'description' => 'Enhance Brain Performance for Baby and Kids',
                'created_at' => '2022-07-15 03:29:29',
                'updated_at' => '2022-07-15 03:29:29',
            ),
            1 => 
            array (
                'id' => 2,
                'icon' => 'icon/O6YedoCycTrmIZmn4VVY5Y9pG7OtW39Z7ItoOwPX.png',
                'description' => 'Prevent Premature Birth',
                'created_at' => '2022-07-15 03:29:42',
                'updated_at' => '2022-07-15 03:29:42',
            ),
            2 => 
            array (
                'id' => 3,
                'icon' => 'icon/sYl3PDrj856JmbdpLYZdiSZhnsPiLcWp4CUVKkqY.png',
                'description' => 'Control Blood Sugar Level',
                'created_at' => '2022-07-15 03:29:52',
                'updated_at' => '2022-07-15 03:29:52',
            ),
            3 => 
            array (
                'id' => 4,
                'icon' => 'icon/gygKbh63F35443RddsTOovuzrPqaTRW1DxPTqg1P.png',
                'description' => 'Prevent Cancer & Free Radicals with Antioxidants',
                'created_at' => '2022-07-15 03:30:12',
                'updated_at' => '2022-07-15 03:30:12',
            ),
        ));
        
        
    }
}