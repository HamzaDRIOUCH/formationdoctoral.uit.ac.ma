<?php

namespace Database\Seeders;

use App\Models\Laboratoire as ModelsLaboratoire;
use Illuminate\Database\Seeder;

class Laboratoire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsLaboratoire::truncate();

        $labos = [
            [
                'intitule' => 'Biologie et Santé',
                'directeur' => 'Pr MESFIOUI ABDELHALIM',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'PRODUCTIONS VÉGÉTALES, Animales et Agro-industrie',
                'directeur' => 'Pr ALLAL DOUIRA	',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Ressources Naturelles et Développement Durable',
                'directeur' => 'Pr OUHSSINE MOHAMMED',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Chimie Organique, Catalyse et Environnement',
                'directeur' => 'Pr TAOUFIQ GUEDIRA',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Matériaux Avancés et Génie des Procédés',
                'directeur' => 'Pr EL HOUSSEINE RIFI',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Géosciences',
                'directeur' => 'Pr ABDELHAK BOUABDLI',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Analyse, Géométrie et Applications',
                'directeur' => 'Pr MOHAMED YAHYAI',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Équations aux dérivées partiels, Algèbre et Géométrie Spectrales',
                'directeur' => 'Pr SAMIR KABBAJ',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Physique des Matériaux et Subatomique',
                'directeur' => 'Pr EL MAHJOUB CHAKIR',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Systèmes Electroniques, Traitement de l\'information, Mécanique et Energétique',
                'directeur' => 'Pr AGGOUR MOHAMED',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Recherche en Informatique',
                'directeur' => 'Pr JAAFAR ABOUCHABAKA',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 1, // Faculté des Sciences
            ], [
                'intitule' => 'Laboratoire de L’Économie et Management des Organisations',
                'directeur' => 'Pr ABDELLAH HOUSSAINI',
                'formation_id' => 2, // ECONOMIE, GESTION
                'etablissement_id' => 2, // Faculté d'Economie et de Gestion
            ], [
                'intitule' => 'Laboratoire des Sciences Économiques et Politiques Publiques',
                'directeur' => 'Pr MOUNIR JERRY',
                'formation_id' => 2, // ECONOMIE, GESTION
                'etablissement_id' => 2, // Faculté d'Economie et de Gestion
            ], [
                'intitule' => 'Laboratoire d\'Etudes et des Sciences Juridiques et Judiciaires',
                'directeur' => 'Pr OUHANNOU MUSTAPHA',
                'formation_id' => 3, //  DROIT
                'etablissement_id' => 3, // Faculté des Sciences Juridiques et Politiques
            ], [
                'intitule' => 'Laboratoire d\'Etudes et de droit et Sciences Politiques',
                'directeur' => 'Pr AHMED AJAOUN',
                'formation_id' => 3, //  DROIT
                'etablissement_id' => 3, // Faculté des Sciences Juridiques et Politiques
            ], [
                'intitule' => 'Laboratoire Homme, Sociétés et Valeurs',
                'directeur' => 'Pr NABIL ABDESSAMAD',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 4, // Faculté des Sciences Humaines et Sociales
            ], [
                'intitule' => 'Laboratoire de Territoire, Environnement et Développement',
                'directeur' => 'Pr MHAMED BOUDOUAH',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 4, // Faculté des Sciences Humaines et Sociales
            ], [
                'intitule' => 'Laboratoire d’Histoire et Patrimoine	',
                'directeur' => 'Pr BOUZIDI SAID',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 4, // Faculté des Sciences Humaines et Sociales
            ], [
                'intitule' => 'Laboratoire de Sciences des Religions',
                'directeur' => 'Pr ZAID BOUCHAARAE',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 4, // Faculté des Sciences Humaines et Sociales
            ], [
                'intitule' => 'Laboratoire de Didactique, de Langue, de Media et de Dramaturgie',
                'directeur' => 'Pr RAHHALI MOHAMED',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 5, // Faculté des Langues, Lettres et Arts
            ], [
                'intitule' => 'Laboratoire de Langage et Société',
                'directeur' => 'Pr HAFIDA ELAMRANI',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 5, // Faculté des Langues, Lettres et Arts
            ], [
                'intitule' => 'Laboratoire de Littérature, Arts et Ingénierie Pédagogique',
                'directeur' => 'Pr SANAE GHOUATI',
                'formation_id' => 4, // LETTRES ET SCIENCES HUMAINES
                'etablissement_id' => 5, // Faculté des Langues, Lettres et Arts
            ], [
                'intitule' => 'Laboratoire de Recherche en Sciences de gestion des organisations',
                'directeur' => 'Pr LAGHZAOUI SOULAIMANE',
                'formation_id' => 2, // ECONOMIE, GESTION
                'etablissement_id' => 6, // Ecole Nationale de Commerce et de Gestion
            ], [
                'intitule' => 'Ingénierie des Systèmes Avancés (ISA)',
                'directeur' => 'Pr ZEJLI DRISS',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 7, // Ecole Nationale des Sciences Appliquées
            ], [
                'intitule' => 'Sciences de l\'Ingénieur (SI)',
                'directeur' => 'Pr OUATIK EL ALAOUI SAID',
                'formation_id' => 1, // SCIENCES ET TECHNIQUES
                'etablissement_id' => 7, // Ecole Nationale des Sciences Appliquées
            ]
        ];

        ModelsLaboratoire::INSERT($labos);
    }
}
