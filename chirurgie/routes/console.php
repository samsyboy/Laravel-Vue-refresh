<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Ce fichier permet de définir des commandes personnalisées pour l'outil Artisan de Laravel (console PHP)
// Ici, on ajoute une commande "inspire" qui affiche une citation inspirante

Artisan::command('inspire', function () {
    // Quand on tape "php artisan inspire" dans le terminal, ça affiche une citation inspirante
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
// On précise le but de la commande pour la documentation ("Afficher une citation inspirante")