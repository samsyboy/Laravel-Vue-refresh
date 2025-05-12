<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;

// Ce seeder remplit la table "choices" avec tous les choix possibles
class ChoiceSeeder extends Seeder
{
    public function run(): void
    {
        // On insère les choix pour l'introduction
        Choice::insert([
            [
                'chapter_id' => 1,
                'text' => 'Je suis un homme',
                'next_chapter_id' => 2,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 1,
                'text' => 'Je suis une femme',
                'next_chapter_id' => 9,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ]
        ]);

        // HOMME
        // On insère les choix pour le parcours homme
        Choice::insert([
            [
                'chapter_id' => 2,
                'text' => 'Les fameux implants capillaires...',
                'next_chapter_id' => 3,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 2,
                'text' => 'Rhinoplastie, marre de ressembler à Capitaine Crochet',
                'next_chapter_id' => 3,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 2,
                'text' => 'Liposuccion, je veux enlever ces kilos en trop qui me complexent',
                'next_chapter_id' => 3,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 3,
                'text' => 'C’est un choix personnel, j’en ai besoin pour moi',
                'next_chapter_id' => 4,
                'self_confidence_impact' => 15,
                'medical_risk_impact' => -5,

            ],
            [
                'chapter_id' => 3,
                'text' => 'C’est à cause du regard des autres, je veux être accepté',
                'next_chapter_id' => 4,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => 10,

            ],
            [
                'chapter_id' => 4,
                'text' => 'Oui, un médecin m’a déjà conseillé',
                'next_chapter_id' => 5,
                'self_confidence_impact' => 5,
                'medical_risk_impact' => -10,

            ],
            [
                'chapter_id' => 4,
                'text' => 'Non, je me lance sans avis médical',
                'next_chapter_id' => 5,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => 20,

            ],
            [
                'chapter_id' => 5,
                'text' => 'Je n’ai que 2000 CHF, je prends des risques',
                'next_chapter_id' => 6,
                'self_confidence_impact' => -10,
                'medical_risk_impact' => 40,

            ],
            [
                'chapter_id' => 5,
                'text' => 'J’ai économisé plus de 10 000 CHF pour ça',
                'next_chapter_id' => 6,
                'self_confidence_impact' => 15,
                'medical_risk_impact' => -15,
            ],
            [
                'chapter_id' => 6,
                'text' => 'Je veux un changement fort, visible, que tout le monde remarque',
                'next_chapter_id' => 7,
                'self_confidence_impact' => 10,
                'medical_risk_impact' => 10,
            ],
            [
                'chapter_id' => 6,
                'text' => 'Je veux que ce soit discret, subtil, mais efficace',
                'next_chapter_id' => 7,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => -10,
            ],
            [
                'chapter_id' => 7,
                'text' => 'Oui, j’en suis sûr, je veux cette opération coûte que coûte',
                'next_chapter_id' => 8,
                'self_confidence_impact' => 15,
                'medical_risk_impact' => -5,
            ],
            [
                'chapter_id' => 7,
                'text' => 'Je doute encore... peut-être que je devrais attendre',
                'next_chapter_id' => 16,
                'self_confidence_impact' => -15,
                'medical_risk_impact' => 5,
            ],
        ]);

        // FEMME
        // On insère les choix pour le parcours femme
        Choice::insert([
            [
                'chapter_id' => 9,
                'text' => 'Implants mammaires, je veux une poitrine généreuse',
                'next_chapter_id' => 10,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,

            ],
            [
                'chapter_id' => 9,
                'text' => 'Rhinoplastie, je veux que mon nez soit tout petit',
                'next_chapter_id' => 10,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 9,
                'text' => 'Liposuccion, pour des courbes plus marquées avec reinjection de graisses dans les fesses',
                'next_chapter_id' => 10,
                'self_confidence_impact' => 0,
                'medical_risk_impact' => 0,
            ],
            [
                'chapter_id' => 10,
                'text' => 'Pour me sentir belle et bien dans ma peau',
                'next_chapter_id' => 11,
                'self_confidence_impact' => 20,
                'medical_risk_impact' => -5,

            ],
            [
                'chapter_id' => 10,
                'text' => 'Pour ressembler aux standards que je vois partout',
                'next_chapter_id' => 11,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => 10,
            ],
            [
                'chapter_id' => 11,
                'text' => 'Je veux un chirurgien renommé, la crème de la crème',
                'next_chapter_id' => 12,
                'self_confidence_impact' => 20,
                'medical_risk_impact' => -15,

            ],
            [
                'chapter_id' => 11,
                'text' => 'Je fais confiance à mon médecin local recommandé',
                'next_chapter_id' => 12,
                'self_confidence_impact' => -15,
                'medical_risk_impact' => 15,
            ],
            [
                'chapter_id' => 12,
                'text' => 'Je prends une option low cost... en espérant que tout ira bien',
                'next_chapter_id' => 13,
                'self_confidence_impact' => -10,
                'medical_risk_impact' => 25,

            ],
            [
                'chapter_id' => 12,
                'text' => 'Je mets le prix pour garantir ma sécurité',
                'next_chapter_id' => 13,
                'self_confidence_impact' => 15,
                'medical_risk_impact' => -20,
            ],
            [
                'chapter_id' => 13,
                'text' => 'Oui, je veux un résultat naturel, sans exagération',
                'next_chapter_id' => 14,
                'self_confidence_impact' => 15,
                'medical_risk_impact' => -10,
            ],
            [
                'chapter_id' => 13,
                'text' => 'Non, je veux un changement spectaculaire, qu’on me remarque',
                'next_chapter_id' => 14,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => 15,
            ],
            [
                'chapter_id' => 14,
                'text' => 'Je suis en forme, tout va bien côté santé',
                'next_chapter_id' => 15,
                'self_confidence_impact' => 5,
                'medical_risk_impact' => -15,
            ],
            [
                'chapter_id' => 14,
                'text' => 'J’ai des soucis de santé, mais je veux tenter le coup',
                'next_chapter_id' => 17,
                'self_confidence_impact' => -5,
                'medical_risk_impact' => 40,
            ],
        ]);
    }
}
