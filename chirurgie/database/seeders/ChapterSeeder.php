<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use Illuminate\Support\Facades\DB;

// Ce seeder remplit la table "chapters" avec tous les chapitres de l'histoire
class ChapterSeeder extends Seeder
{
    public function run(): void
    {
        // On vide d'abord la table pour éviter les doublons
        DB::table('chapters')->delete();

        // On insère tous les chapitres dans la base de données
        Chapter::insert([
            // INTRO
            [
                'id' => 1,
                'story_id' => 1,
                'title' => 'Qui êtes-vous ?',
                'content' => 'Bienvenue dans cette aventure esthétique. Veuillez choisir votre genre pour personnaliser votre parcours.',
            ],

            // HOMME
            [
                'id' => 2,
                'story_id' => 2,
                'title' => 'Bonjour, que souhaitez-vous refaire ?',
                'content' => 'Voici les interventions les plus populaires chez les hommes.',
            ],
            [
                'id' => 3,
                'story_id' => 2,
                'title' => 'Quelle est votre principale motivation ?',
                'content' => 'Est-ce pour votre confiance personnelle ou à cause du regard des autres ?',
            ],
            [
                'id' => 4,
                'story_id' => 2,
                'title' => 'Avez-vous déjà consulté un professionnel ?',
                'content' => 'Une première consultation peut vous aider à clarifier vos besoins.',
            ],
            [
                'id' => 5,
                'story_id' => 2,
                'title' => 'Quel est votre budget ?',
                'content' => 'Un budget limité peut vous exposer à plus de risques si vous choisissez des options moins encadrées.',
            ],
            [
                'id' => 6,
                'story_id' => 2,
                'title' => 'Souhaitez-vous que le changement soit visible ou discret ?',
                'content' => 'Certaines interventions sont plus subtiles que d’autres.',
            ],
            [
                'id' => 7,
                'story_id' => 2,
                'title' => 'Pensez-vous que cela vous rendra plus heureux ?',
                'content' => 'Une réflexion sur les motivations profondes est essentielle.',
            ],
            [
                'id' => 8,
                'story_id' => 2,
                'title' => 'Finalité positive',
                'content' => "Le patient est radieux. Le résultat dépasse ses attentes. 
                                Il s’accepte enfin pleinement. La chirurgie a été une réussite totale.
                                Mais il est important de garder les pieds sur terre. La chirurgie esthétique, 
                                aussi satisfaisante soit-elle, n’est jamais un acte banal. Elle engage le corps, 
                                le mental, et parfois même l’identité. Derrière chaque opération se cachent des risques, 
                                des cicatrices, une récupération parfois difficile, et surtout un impact émotionnel profond. 
                                Ce choix doit toujours être mûrement réfléchi, accompagné par des professionnels de confiance. 
                                Il ne s’agit pas d’une solution miracle, mais d’un engagement personnel lourd de conséquences.",
            ],
            [
                'id' => 16,
                'story_id' => 2,
                'title' => 'Finalité négative',
                'content' => "L’intervention a entraîné des complications majeures. Il y a eu une erreur en salle d’opération. 
                                Le patient est décédé sur la table. L’intervention qui devait être un nouveau départ s’est transformée en mort tragique.
                                La chirurgie esthétique n’est pas un jeu. Ce n’est ni une tendance à suivre, ni une décision à prendre sur un coup de tête. 
                                Chaque geste chirurgical comporte des risques réels, parfois irréversibles. Les enjeux sont autant physiques que psychologiques. 
                                Une mauvaise préparation, un professionnel peu scrupuleux ou un état de santé négligé peuvent entraîner des conséquences dramatiques. 
                                Avant de se lancer, il est essentiel de bien s’informer, de se faire accompagner, et surtout, de réfléchir profondément à ses motivations. 
                                Parce qu’un corps, on n’en a qu’un seul.",
            ],

            // FEMME
            [
                'id' => 9,
                'story_id' => 3,
                'title' => 'Bonjour, que souhaitez-vous refaire ?',
                'content' => 'Voici les interventions les plus populaires chez les femmes.',
            ],
            [
                'id' => 10,
                'story_id' => 3,
                'title' => 'Pourquoi souhaitez-vous cette opération ?',
                'content' => 'Est-ce pour vous plaire ou pour répondre à une attente extérieure ?',
            ],
            [
                'id' => 11,
                'story_id' => 3,
                'title' => 'Quel chirurgien choisirez-vous ?',
                'content' => 'La réputation d’un chirurgien peut changer l’issue.',
            ],
            [
                'id' => 12,
                'story_id' => 3,
                'title' => 'Quel est votre budget ?',
                'content' => 'Le coût peut influencer la qualité des soins.',
            ],
            [
                'id' => 13,
                'story_id' => 3,
                'title' => 'Souhaitez-vous un résultat naturel ?',
                'content' => 'Plus c’est naturel, plus la récupération est rapide.',
            ],
            [
                'id' => 14,
                'story_id' => 3,
                'title' => 'Quel est votre état de santé actuel ?',
                'content' => 'Certains problèmes de santé peuvent augmenter les risques.',
            ],
            [
                'id' => 15,
                'story_id' => 3,
                'title' => 'Finalité positive',
                'content' => "La patiente est radieuse. Le résultat dépasse ses attentes. 
                                Elle s’accepte enfin pleinement. La chirurgie a été une réussite totale.
                                Mais il est important de garder les pieds sur terre. La chirurgie esthétique, 
                                aussi satisfaisante soit-elle, n’est jamais un acte banal. Elle engage le corps, 
                                le mental, et parfois même l’identité. Derrière chaque opération se cachent des risques, 
                                des cicatrices, une récupération parfois difficile, et surtout un impact émotionnel profond. 
                                Ce choix doit toujours être mûrement réfléchi, accompagné par des professionnels de confiance. 
                                Il ne s’agit pas d’une solution miracle, mais d’un engagement personnel lourd de conséquences.",

            ],
            [
                'id' => 17,
                'story_id' => 3,
                'title' => 'Finalité négative',
                'content' => "Des problèmes de santé ignorés ont conduit à une complication fatale. 
                                Elle ne se réveillera jamais de l’anesthésie. L’intervention qui devait être un nouveau départ s’est transformée en mort tragique.
                                La chirurgie esthétique n’est pas un jeu. Ce n’est ni une tendance à suivre, ni une décision à prendre sur un coup de tête. Chaque geste chirurgical comporte des risques réels, parfois irréversibles. Les enjeux sont autant physiques que psychologiques. 
                                Une mauvaise préparation, un professionnel peu scrupuleux ou un état de santé négligé peuvent entraîner des conséquences dramatiques. 
                                Avant de se lancer, il est essentiel de bien s’informer, de se faire accompagner, et surtout, de réfléchir profondément à ses motivations. 
                                Parce qu’un corps, on n’en a qu’un seul.",
            ],
        ]);
    }
}