<?php

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
        factory(App\User::class, 10)->create(); //user db seeder
        factory(App\Company::class, 10)->create(); //company db seeder
    }
}
