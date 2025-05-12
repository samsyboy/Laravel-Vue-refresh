<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;

// Ce seeder remplit la table "stories" avec les histoires de base
class StorySeeder extends Seeder
{
    public function run(): void
    {
                // On insère les différentes histoires dans la base de données
        Story::insert([
            [
                'title' => 'Introduction : Qui êtes-vous ?',
                'description' => 'Un premier choix simple pour démarrer votre parcours de transformation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Votre parcours (Homme)',
                'description' => 'Une expérience immersive pour ceux qui cherchent à modifier leur apparence masculine.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Votre parcours (Femme)',
                'description' => 'Une exploration des choix de chirurgie esthétique pour femmes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Finalité : Chirurgie réussie',
                'description' => 'Vous vous sentez confiant·e, épanoui·e, et votre opération est un franc succès. Bravo !',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Finalité : Complications graves',
                'description' => 'Malheureusement, les risques médicaux étaient trop élevés... Le patient n’a pas survécu à l’opération.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
