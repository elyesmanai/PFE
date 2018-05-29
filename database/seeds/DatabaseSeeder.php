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
        factory(App\User::class, 50)->create();
        factory(App\Convocation::class, 50)->create();
        factory(App\EvalTable::class, 50)->create();
        factory(App\TechTable::class, 50)->create();
        factory(App\FinTable::class, 50)->create();
    }
}
