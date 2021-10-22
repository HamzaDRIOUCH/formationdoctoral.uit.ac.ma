<?php

namespace Database\Seeders;

use App\Models\Etablissement as ModelsEtablissement;
use Illuminate\Database\Seeder;

class Etablissement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsEtablissement::truncate();
        $etbs=[
            [
                'code' => 'FS',
                'nom_fr' => 'Faculté des sciences',
                'nom_ar' => 'كلية العلوم ',
            ],[
                'code' => 'FEG',
                'nom_fr' => 'Faculté d\'Économie et Gestion',
                'nom_ar' => 'كلية الإقتصاد و التسيير',
            ],[
                'code' => 'FSJP',
                'nom_fr' => 'Faculté des Sciences Juridiques et Politiques',
                'nom_ar' => 'كلية العلوم القانونية و السياسية',
            ],[
                'code' => 'FSHS',
                'nom_fr' => 'Faculté des Sciences Humaines et Sociales',
                'nom_ar' => 'كلية العلوم الإنسانية و الإجتماعية',
            ],[
                'code' => 'FLLA',
                'nom_fr' => 'Faculté des Langues des Lettres et des Arts',
                'nom_ar' => 'كلية اللغات و الآداب و الفنون',
            ],[
                'code' => 'ENCG',
                'nom_fr' => 'Ecole Nationale de Commerce et de Gestion',
                'nom_ar' => 'المدرسة الوطنية للتجارة والتسيير',
            ],[
                'code' => 'ENSA',
                'nom_fr' => 'Ecole Nationale des Sciences Appliquées',
                'nom_ar' => 'المدرسة الوطنية للعلوم التطبيقية',
            ]
        ];

        ModelsEtablissement::INSERT($etbs);
    }
}