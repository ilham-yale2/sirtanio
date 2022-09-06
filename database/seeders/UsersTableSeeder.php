<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YpgMBkiTObfOtDi.ltqDYO6.0yyA7qiZwCosgeQDwJYbf.cmZhBSi',
                'remember_token' => NULL,
                'created_at' => '2022-07-15 14:11:35',
                'updated_at' => '2022-07-15 14:11:35',
            ),
        ));


    }
}
