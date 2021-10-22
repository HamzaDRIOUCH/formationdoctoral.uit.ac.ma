<?php

namespace Database\Seeders;

use App\Models\Professeur as ModelsProfesseur;
use Illuminate\Database\Seeder;

class Professeur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsProfesseur::truncate();

        $profs = [
            [
                'nom' => 'Pr MESFIOUI ABDELHALIM',
                'laboratoire_id' => 1,
            ], [
                'nom' => 'Pr ALLAL DOUIRA',
                'laboratoire_id' => 2,
            ], [
                'nom' => 'Pr OUHSSINE MOHAMMED',
                'laboratoire_id' => 3,
            ], [
                'nom' => 'Pr TAOUFIQ GUEDIRA',
                'laboratoire_id' => 4,
            ], [
                'nom' => 'Pr EL HOUSSEINE RIFI',
                'laboratoire_id' => 5,
            ], [
                'nom' => 'Pr ABDELHAK BOUABDLI',
                'laboratoire_id' => 6,
            ], [
                'nom' => 'Pr MOHAMED YAHYAI',
                'laboratoire_id' => 7,
            ], [
                'nom' => 'Pr SAMIR KABBAJ',
                'laboratoire_id' => 8,
            ], [
                'nom' => 'Pr EL MAHJOUB CHAKIR',
                'laboratoire_id' => 9,
            ], [
                'nom' => 'Pr AGGOUR MOHAMED',
                'laboratoire_id' => 10,
            ], [
                'nom' => 'Pr JAAFAR ABOUCHABAKA',
                'laboratoire_id' => 11,
            ], [
                'nom' => 'Pr ABDELLAH HOUSSAINI',
                'laboratoire_id' => 12,
            ], [
                'nom' => 'Pr MOUNIR JERRY',
                'laboratoire_id' => 13,
            ], [
                'nom' => 'Pr OUHANNOU MUSTAPHA',
                'laboratoire_id' => 14,
            ], [
                'nom' => 'Pr AHMED AJAOUN',
                'laboratoire_id' => 15,
            ], [
                'nom' => 'Pr NABIL ABDESSAMAD',
                'laboratoire_id' => 16,
            ], [
                'nom' => 'Pr MHAMED BOUDOUAH',
                'laboratoire_id' => 17,
            ], [
                'nom' => 'Pr BOUZIDI SAID',
                'laboratoire_id' => 18,
            ], [
                'nom' => 'Pr ZAID BOUCHAARAE',
                'laboratoire_id' => 19,
            ], [
                'nom' => 'Pr RAHHALI MOHAMED',
                'laboratoire_id' => 20,
            ], [
                'nom' => 'Pr HAFIDA ELAMRANI',
                'laboratoire_id' => 21,
            ], [
                'nom' => 'Pr SANAE GHOUATI',
                'laboratoire_id' => 22,
            ], [
                'nom' => 'Pr LAGHZAOUI SOULAIMANE',
                'laboratoire_id' => 23,
            ], [
                'nom' => 'Pr ZEJLI DRISS',
                'laboratoire_id' => 24,
            ], [
                'nom' => 'Pr OUATIK EL ALAOUI SAID',
                'laboratoire_id' => 25,
            ],
        ];

        ModelsProfesseur::INSERT($profs);
    }
}
