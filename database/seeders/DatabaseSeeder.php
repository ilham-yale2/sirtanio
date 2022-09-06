<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GeneralsTableSeeder::class);
        $this->call(HomeTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(JourneysTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(OpreasonTableSeeder::class);
        $this->call(OpimageTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(BenefitsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
