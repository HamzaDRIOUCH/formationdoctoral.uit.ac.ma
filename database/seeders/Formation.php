<?php

namespace Database\Seeders;

use App\Models\Formation as ModelsFormation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class Formation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsFormation::truncate();

        $forms = [
            ['intitule' => 'SCIENCES ET TECHNIQUES'],
            ['intitule' => 'ECONOMIE, GESTION'],
            ['intitule' => 'DROIT'],
            ['intitule' => 'LETTRES ET SCIENCES HUMAINES']
        ];
       
        ModelsFormation::INSERT($forms);
    }
}
