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
        $this->call([
            Formation::class,
            Etablissement::class,
            Laboratoire::class,
            Professeur::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
